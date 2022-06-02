<?php

namespace App\Http\Requests;

class UsersRequest extends BaseRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:2|max:50|regex:/^[a-zA-Z]+$/|string',
            'last_name' => 'required|min:2|max:50|regex:/^[a-zA-Z]+$/|string',
            'email' => ['required', 'string', 'email:filter', 'min:10', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:100', 'confirmed'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => ':attribute alanı boş bırakılamaz!',
            'first_name.min' => ':attribute alanı en az :min karakter olabilir!',
            'first_name.max' => ':attribute alanı en fazla :max karakter olabilir!',
            'first_name.regex' => ':attribute alanı sadece harflerden oluşabilir!',
            'last_name.required' => ':attribute alanı boş bırakılamaz!',
            'last_name.min' => ':attribute alanı en az :min karakter olabilir!',
            'last_name.max' => ':attribute alanı en fazla :max karakter olabilir!',
            'last_name.regex' => ':attribute alanı sadece harflerden oluşabilir!',
            'email.required' => ':attribute alanı boş bırakılamaz!',
            'email.min' => ':attribute en az :min karakter olabilir!',
            'email.max' => ':attribute en fazla :max karakter olabilir!',
            'email.email' => 'Hatalı :attribute formatı!',
            'email.unique' => 'Bu :attribute zaten mevcut!',
            'password.required' => ':attribute alanı boş bırakılamaz!',
            'password.min' => ':attribute en az :min karakter olabilir!',
            'password.max' => ':attribute en fazla :max karakter olabilir!',
            'password.confirmed' => ':attribute tekrarı boş ya da hatalı!',
            'image.image' => "Hatalı dosya formatı!",
            'image.mimes' => ":attribute formatı: :values uzantılarında olmalıdır!",
            'image.max' => ":attribute 2MB'dan büyük olamaz!",  
        ];
    }

    public function attributes()
{
    return [
        'first_name' => 'Ad',
        'last_name' => 'Soyad',
        'password' => 'Parola',
        'email' => 'E-posta adresi',
    ];
}
}