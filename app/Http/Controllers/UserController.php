<?php

namespace App\Http\Controllers;

use App\Helpers\ErpResponse;
use Illuminate\Support\Str;
use App\Helpers\ErrorHelper;
use App\Helpers\PaginationHelper;
use App\Http\Requests\LoginRequest;
use App\Models\Core\Parent as StudentParent;
use App\Models\Core\Role;
use App\Models\Core\Student;
use App\Models\Core\Teacher;
use App\Models\Core\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function getRoles(): Response {
        $response = new ErpResponse();
        $response->setSuccess(true);
        $response->setJsonContent(Role::query()->get(), "roles");
        return $response;
    }

    public function getUser(Request $request, int $user_id): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();

            $user = User::query()->where([
                ['platform_id', $user->platform_id],
                ['id', $user_id]
            ])->first();

            if(is_null($user)) {
                $response->addError(ErrorHelper::USER_NOT_FOUND);
                return $response;
            }

            $response->setSuccess(true);
            $response->setJsonContent($user, "user");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function createUser(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();
            if($user->role->role != 'ADMIN') { }


            DB::beginTransaction();

            $newUser = new User();
            $newUser->username = $request->input('username');
            $newUser->password = $request->input('password');
            $newUser->first_name = $request->input('first_name');
            $newUser->last_name = $request->input('last_name');
            $newUser->birthday = $request->input('birthday');
            $newUser->city_id = $request->input('city_id');
            $newUser->town_id = $request->input('town_id');
            $newUser->address = $request->input('address');
            $newUser->email = $request->input('email');
            $newUser->phone_number = $request->input('phone_number');
            $newUser->active = $request->input('active');

            $role_id = $request->input('role_id');
            $newUser->role_id = $role_id;

            $newUser->save();

            switch($role_id) {
                case 1:

                    break;
                case 2:
                    $newStudent = new Student();
                    $newStudent->user_id = $newUser->id;
                    $newStudent->image_id = $request->input('image_id');
                    $newStudent->reference = Str::random(15);
                    $newStudent->save();
                    break;
                case 3:
                    $newParent = new StudentParent();
                    $newParent->user_id = $newUser->user_id;
                    $newParent->student_id = $request->input('student_id');
                    $newParent->save();
                    break;
                case 4:
                    $newTeacher = new Teacher();
                    $newTeacher->user_id = $newUser->id;
                    $newTeacher->save();
                    break;
            }


            DB::commit();

            $response->setSuccess(true);
            $response->setJsonContent($newStudent, "student");
        }catch(\Throwable $ex) {
            DB::rollBack();
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function getUsers(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();
            if($user->role->role != 'ADMIN') { }

            $role_id = $request->query('role_id');
            // $student_role_id = Role::query()->where('role', 'STUDENT')->first()->id;
            $builder = null;
            switch($role_id) {
                case 1:

                    break;
                case 2:
                    $builder = Student::with(['image', 'user']);
                    break;
                case 3:
                    $builder = StudentParent::with(['user', 'student']);
                    break;
                case 4:
                    $builder = Teacher::with('user');
                    break;
            }

            $users = PaginationHelper::filterAndPaginate($request, $builder);

            $response->setSuccess(true);
            $response->setJsonContent($users, "users");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function login(LoginRequest $loginRequest): Response {
        $credentials = $loginRequest->getCredentials();

        if (! $token = auth()->attempt($credentials)) {
            $response = new ErpResponse();
            $response->addError(ErrorHelper::WRONG_USERNAME_OR_PASSWORD);
            return $response;
        }

        return $this->respondWithToken($token);
    }

    public function logout(): Response {
        auth()->logout();
        $response = new ErpResponse();
        $response->setSuccess(true);
        return $response;
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function self(): Response {
        $user = response()->json(auth()->user());
        $response = new ErpResponse();
        $response->setSuccess(true);
        $response->setJsonContent($user->original, "user");
        return $response;
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(): Response {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token): Response {
        $response = new ErpResponse();
        $response->setSuccess(true);
        $response->setJsonContent([
            'user' => auth()->user(),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
        return $response;
    }
}
