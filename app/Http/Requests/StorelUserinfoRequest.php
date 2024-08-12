<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorelUserinfoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firs_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'birthday' => 'required|max:255',
            'jshshri' => 'required|size:14|unique:userinfos',
            'gender' => 'required|max:255',
            'phone' => 'required|max:255',
            'academic_degree' => 'required|max:255',
            'certificate' => 'required|max:255',
            'image' => 'mimes:jpg,png,JPG,PNG',
        ];
    }
}
