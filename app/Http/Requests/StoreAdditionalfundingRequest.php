<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdditionalfundingRequest extends FormRequest
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
            'order_number' => 'required|max:255', 
            'additional_amount' => 'required|max:255', 
            'additional_charge_number' => 'required|max:255', 
            'additional_date' => 'required|max:255', 
            'total_funding' => 'required|max:255', 
            'report_letter_number' , 
            'report_letter_date' => 'required|max:255', 
            'money_saved_sum' => 'required|max:255', 
            'money_saved_boshqa' => 'required|max:255', 
            'refund_amount' => 'required|max:255', 
            'returned_currency' => 'required|max:255', 
            'return_date' => 'required|max:255', 
            'additional_refund_amount' => 'required|max:255', 
            'additional_returned_currency' => 'required|max:255', 
            'additional_refund_date' => 'required|max:255', 
            'additional_refund_total' => 'required|max:255', 
            'total_payment' => 'required|max:255',
        ];
    }
}
