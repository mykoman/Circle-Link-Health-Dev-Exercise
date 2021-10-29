<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordCreationRequest extends FormRequest
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
            'systolic' => 'required|numeric|min:70',
            'diastolic' => 'required|numeric|min:40',
        ];
    }
}
