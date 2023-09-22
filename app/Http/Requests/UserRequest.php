<?php

namespace App\Http\Requests;

use App\Http\Requests\ErpRequest;

class UserRequest extends ErpRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string|min:7|unique:\App\Models\Core\User,username',
            'password' => 'required|string|min:8',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birthday' => 'required|date',
            'city_id' => 'required|integer|exists:\App\Models\Static\City,id',
            'town_id' => 'required|integer|exists:\App\Models\Static\Town,id',
            'address' => 'string',
            'email' => 'required|email|unique:\App\Models\Core\User,email',
            'phone_number' => 'required|string|regex:/^0[5-7]{0,1}\d{8}$/',
            'active' => 'required|boolean',
            'role_id' => 'required|integer|exists:\App\Models\Core\Role,id'
        ];
    }
}
