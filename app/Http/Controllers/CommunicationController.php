<?php

namespace App\Http\Controllers;

use App\Helpers\ErpResponse;
use App\Helpers\ErrorHelper;
use App\Helpers\PaginationHelper;
use App\Models\Core\Communication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CommunicationController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }


    public function compose(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();

            $communication = new Communication();
            $communication->from_id = $user->id;
            $communication->to_id = $request->input('to_id');
            $communication->subject = $request->input('subject');
            $communication->content = $request->input('content');
            $communication->save();

            $response->setSuccess(true);
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function read(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();

            $communication = Communication::query()->where([['to_id', $user->id], ['id', $request->query('communication_id')]])->first();
            $communication->read = true;
            $communication->save();

            $response->setSuccess(true);
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function readAll(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();

            $communications = Communication::query()->where('to_id', $user->id)->update(['read' => true]);

            $response->setSuccess(true);
            $response->setJsonContent($communications, "communications");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function getCommunications(Request $request): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();

            $communications_query = Communication::with('from')->where('to_id', $user->id);
            $communications = PaginationHelper::filterAndPaginate($request, $communications_query);


            $response->setSuccess(true);
            $response->setJsonContent($communications, "communications");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

    public function deleteCommunication(Request $request, $communication_id): Response {
        $response = new ErpResponse();

        try{
            $user = $request->user();

            Communication::query()->where([['to_id', $user->id], ['id', $communication_id]])->first();

            $response->setSuccess(true);
            $response->setJsonContent("Email deleted successfully", "message");
        }catch(\Throwable $ex) {
            $response->addError(ErrorHelper::UNEXPECTED_ERROR);
            Log::error($ex);
        }

        return $response;
    }

}
