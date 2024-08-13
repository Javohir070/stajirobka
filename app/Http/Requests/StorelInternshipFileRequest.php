<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorelInternshipFileRequest extends FormRequest
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
            'user_infos' => 'required|max:255',
            'order_period' => 'required|max:255',
            'tracking_decision_number' => 'required|max:255',
            'tracking_decision_date' => 'required|max:255',
            'special_expert_number' => 'required|max:255',
            'special_expert_date' => 'required|max:255',
            'agency_order_number' => 'required|max:255',
            'agency_order_date' => 'required|max:255',
            'contract_number' => 'required|max:255',
            'contract_date' => 'required|max:255',
            'amount' => 'required|max:255',
            'payment_number' => 'required|max:255',
            'date' => 'required|max:255',
            'total_funding_amount' => 'required|max:255',
            'financial_letter_number' => 'required|max:255',
            'financial_letter_date' => 'required|max:255',
            'scientific_letter_number' => 'required|max:255',
            'scientific_letter_date' => 'required|max:255',
            'money_saved' => 'required|max:255',
            'total_payment' => 'required|max:255',
            'follow_up_letter' => 'file|mimes:pdf,doc,docx|max:2048',
            'council_decision' => 'file|mimes:pdf,doc,docx|max:2048',
            'scientific_report' => 'file|mimes:pdf,doc,docx|max:2048',
            'financial_reporting' => 'file|mimes:pdf,doc,docx|max:2048',
            'sxplanation' => 'required|max:255',
        ];
    }
}
