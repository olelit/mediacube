<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'firstname'=>'required',
            'surname'=>'required',
            'departments'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Поле "Имя" обязательно для заполнения',
            'surname.required'  => 'Поле "Фамилия" обязательно для заполнения',
            'departments.required'  => 'Необходимо выбрать минимум один отдел',
        ];
    }
}
