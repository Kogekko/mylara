<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'matkhau'=>'required|min:6|max:20'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'matkhau.required'=>'Vui lòng nhập mật khẩu',
            'matkhau.min'=>'Mật khẩu ít nhất 6 kí tự',
            'matkhau.max'=>'Mật khẩu nhiều nhất 20 kí tự'
        ];
    }

}
