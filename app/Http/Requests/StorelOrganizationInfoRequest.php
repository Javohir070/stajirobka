<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorelOrganizationInfoRequest extends FormRequest
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
            'user_info_id' => 'required|max:255',
            'higher_organization' => 'required|max:255',
            'organization_type' => 'required|max:255',
            'organization_name' => 'required|max:255',
            'position' => 'required|max:255',
            'STIR' => 'required|max:255',
            'region' => 'required|max:255',
            'district' => 'required|max:255',
        ];
    }
}
