<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required|email:strict,dns',
            'password' => 'required|min:7',
            'password-confirm' => 'required| same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'ユーザー名は必ず入力してください。',
            'email.required' => 'Eメールアドレスは必ず入力してください。',
            'email' => 'Eメールアドレスが無効です。',
            'password.required' => 'パスワードは必ず入力してください。',
            'password.min' => 'パスワードは7文字以上で入力してください。',
            'password-confirm.required' => '確認用パスワードは必ず入力してください。',
            'password-confirm.same' => 'パスワードと確認用パスワードが一致しません。',
        ];
    }
}
