<?php

namespace App\Http\Controllers;

use App\Helpers\ErpResponse;
use App\Helpers\ErrorHelper;
use App\Helpers\PaginationHelper;
use App\Models\Core\Teacher;
use App\Models\Core\TeacherSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function getSubjects(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();
            $teacher_profile = Teacher::query()->where('user_id', $user->id)->first();
            if(is_null($teacher_profile)) {
                throw new \Exception();
            }

            $subjects = PaginationHelper::filterAndPaginate($request, TeacherSubject::with("subject.speciality")->where('teacher_id', $teacher_profile->id));

            $response->setSuccess(true);
            $response->setJsonContent($subjects, "subjects");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

}
