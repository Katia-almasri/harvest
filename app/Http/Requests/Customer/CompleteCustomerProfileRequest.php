<?php

namespace App\Http\Requests\Customer;

use App\Enums\Customer\EmploymentStatus;
use Illuminate\Foundation\Http\FormRequest;

class CompleteCustomerProfileRequest extends FormRequest
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
            'longitude' => 'required|numeric|between:-180,180',
            'latitude' => 'required|numeric|between:-90,90',
            'employmentStatus' => ['string', EmploymentStatus::getAll()]
        ];
    }
}
