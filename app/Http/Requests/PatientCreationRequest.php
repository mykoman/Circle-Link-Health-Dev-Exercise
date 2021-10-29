<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientCreationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string|min:2|max:255',
            'middle_name' => 'string|min:2|max:255',
            'phone' => 'required|string|min:8|max:255',
            'email' => 'required|string|email|min:8|max:255',
            'address' => 'string|min:8|max:500',
            'date_of_birth' => 'required|date',
        ];
    }
}
