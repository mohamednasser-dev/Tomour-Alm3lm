<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class ReservationStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'id_number' => 'required|numeric',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('reservations', 'email')
            ],
            'phone' => [
                'required',
                Rule::unique('reservations', 'phone')
            ],
            'c_r_num' => [
                'required',
                Rule::unique('reservations', 'c_r_num')
            ],
            'address' => 'required|string|max:255',
            'is_lawsuit' => 'required|in:1,0',
            'is_employee' => 'required|in:1,0',
            'how_know' => 'required|string|max:2000',
            'how_satisfied' => 'required|string|max:2000',

            'is_rights' => 'required|in:1,0',
            'is_follow' => 'required|in:1,0',
            'is_financial' => 'required|in:1,0',
            'company_name' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'have_granted_brand' => 'required|in:1,0',
            'granted_brands' => 'nullable|string|max:2000',
            'city_id' => 'required|exists:cities,id',
            'income_source' => 'required|string|max:2000',
            'financial' => 'required|string|max:2000',
            'projects_owned' => 'required|string|max:2000',

        ];
    }
}
