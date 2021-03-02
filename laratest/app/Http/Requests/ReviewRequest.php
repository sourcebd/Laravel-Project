<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'feedback' => 'required|min:2|bail',
        ];
    }

    public function messages()
    {
        return [
            'feedback.required' => "Feedback can't be empty...",

            'feedback.min' => "Feedback must be minimum 2 characters...",

        ];
    }
}
