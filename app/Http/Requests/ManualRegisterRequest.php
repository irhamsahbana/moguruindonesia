<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManualRegisterRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email:dns|max:255|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Nama depan tidak boleh kosong.',
            'last_name.required' => 'Nama belakang tidak boleh kosong.',
            'email.required'=> 'Email tidak boleh kosong.',
            'email.unique' => 'Email telah terdaftar.',
            'phone.required' => 'Nomer handphone tidak boleh kosong.',
            'phone.numeric' => 'Nomer handphone hanya boleh angka saja.',
            'phone.unique' => 'Nomer handphone telah terdaftar.',
            'password.required' => 'Password tidak boleh kosong.',
            'password.min' => 'Password minimal 8 karakter.',
            'password_confirmation.required' => 'Password konfirmasi tidak cocok.'
        ];
    }
}
