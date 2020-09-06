<?php

namespace App\Http\Requests;
use App\Customer;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email'=>'required|email|unique:customers',
            'ho'=>'required|string',
            'ten'=>'required|string',
            'diachi'=>'required|string',
            'dienthoai'=>'required|string',
            'matkhau'=>'required|min:6|max:20',
            're_matkhau'=>'required|same:matkhau',
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'matkhau.required'=>'Vui lòng nhập mật khẩu',
            're_matkhau.same'=>'Mật khẩu nhập lại không khớp',
            'matkhau.min'=>'Mật khẩu ít nhất 6 kí tự',
            'matkhau.max'=>'Mật khẩu nhiều nhất 20 kí tự'
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();         
        } else {

        }

    }
}
