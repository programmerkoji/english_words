<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWord extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'word_en' => ['required', 'unique:words,word_en', 'string', 'max:255'],
            'word_ja' => ['required', 'string', 'max:255'],
            'part_of_speech' => ['required'],
            'memory' => ['required'],
            'memo' => ['string', 'nullable'],
        ];
    }
}
