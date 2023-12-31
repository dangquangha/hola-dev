<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'content' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'Vui lòng nhập content',
            'content.min' => 'Vui lòng nhập lớn hơn 4 ký tự',
        ];
    }
}
