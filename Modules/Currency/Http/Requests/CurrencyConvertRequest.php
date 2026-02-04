<?php
namespace Modules\Currency\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyConvertRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'from_id' => 'required|exists:currencies,id',
            'to_id'   => 'required|exists:currencies,id',
            'amount'  => 'required|number|min:0',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
