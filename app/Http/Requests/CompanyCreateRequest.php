<?php

namespace App\Http\Requests;

class CompanyCreateRequest extends \Illuminate\Http\Request
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
            'name' => 'required|max:75',
            'phone' => 'required|unique:companies|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'description' => 'required|max:255'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Token is required!',
            'description.required' => 'Password is required!',
        ];
    }
}
