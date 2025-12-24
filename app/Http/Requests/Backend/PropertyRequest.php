<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'title'=>['required','string','max:255','min:2'],
            'surface'=>['required','integer','min:1'],
            'chambre'=>['required','integer','min:1'],
            'prix'=>['required','integer','min:1000'],
            'ville'=>['required','string','max:255','min:2'],
            'adresse'=>['required','string','max:255','min:2'],
            'description'=>['required','string','min:5'],
            'pictures'=>['array'],
            'pictures.*'=>['image','max:2000','mimes:png,jpg']
        ];
    }
}
