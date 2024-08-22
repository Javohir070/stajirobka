<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorelInternshipInfoRequest extends FormRequest
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
            "order_number" => 'required|max:255',
            'selection_type' => 'required|max:255',
            'selection_year' => 'required|max:255',
            'year_funded' => 'required|max:255',
            'year_of_dispatch' => 'required|max:255',
            'foreign_country' => 'required|max:255',
            'receiving_organization' => 'required|max:255',
            'direction_of_practice' => 'required|max:255',
            'practice_topic' => 'required|max:255',
            'start_date' => 'required|max:255',
            'end_date' => 'required|max:255',
            'age' => 'required|max:255',
        ];
    }
}
