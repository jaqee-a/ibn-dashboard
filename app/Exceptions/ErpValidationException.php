<?php

namespace App\Exceptions;

use App\Helpers\ErpResponse;
use App\Helpers\ErrorHelper;
use Exception;
use Illuminate\Validation\Validator;

class ErpValidationException extends Exception
{
    public function __construct(Validator $validator) {
        $response = new ErpResponse();
        $response->setStatusCode(422);
        $response->setSuccess(false);

        $errors = collect($validator->errors()->messages())->flatten();
        $mapped_errors = $errors->map(fn($error) => [
            'code' => ErrorHelper::VALIDATION_ERROR,
            'message' => $error
        ]);

        $response->setJsonContent($mapped_errors, "errors");
        abort($response);
    }

    protected function summarize($validator) {
        $messages = $validator->errors()->all();

        if (! count($messages) || ! is_string($messages[0])) {
            return $validator->getTranslator()->get('The given data was invalid.');
        }

        $message = array_shift($messages);

        if ($count = count($messages)) {
            $pluralized = $count === 1 ? 'error' : 'errors';

            $message .= ' '.$validator->getTranslator()->get("(and :count more $pluralized)", compact('count'));
        }

        return $message;
    }
}
