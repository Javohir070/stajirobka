<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorelFinalReportRequest extends FormRequest
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
            'follow_up_letter' => 'file|mimes:pdf,doc,docx|max:2048',
            'council_decision' => 'file|mimes:pdf,doc,docx|max:2048',
            'scientific_report' => 'file|mimes:pdf,doc,docx|max:2048',
            'financial_reporting' => 'file|mimes:pdf,doc,docx|max:2048',
        ];
    }
}
