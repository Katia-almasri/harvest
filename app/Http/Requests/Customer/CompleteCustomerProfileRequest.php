<?php

namespace App\Http\Requests\Customer;

use App\Enums\Customer\EmploymentStatus;
use App\Enums\Customer\Industry;
use App\Enums\Customer\MainFundType;
use App\Enums\RealEstate\PricesRange;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'employment_status' => ['string', Rule::in(EmploymentStatus::getAll())],
            'industry' => ['string', Rule::in(Industry::getAll())],
            'main_source_of_fund' => ['string', Rule::in(MainFundType::getAll())],
            'minimum_investment_amount' => ['string', Rule::in(PricesRange::getAll())],
        ];
    }
}
