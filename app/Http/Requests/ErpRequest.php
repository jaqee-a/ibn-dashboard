<?php

namespace App\Http\Requests;

use App\Exceptions\ErpValidationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ErpRequest extends FormRequest {

    protected function failedValidation(Validator $validator) {
        throw new ErpValidationException($validator);
    }

}
