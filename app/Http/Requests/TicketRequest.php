<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends BaseRequest
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
            'category' => 'required|min:2|max:50|regex:/^[a-zA-Z]+$/|string',
            'title' => 'required|min:2|max:50|string',
            'description' => 'required|min:2|max:500|string',
            'severity' => 'required', 'string', 'min:1', 'max:1',
            'status' => 'required|min:5|max:50|string',
            'assignee' => 'required|min:2|max:50|string',
        ];
    }

    public function messages()
    {
      return  [
            'category.required' => ':attribute alanı boş bırakılamaz!',
            'category.min' => ':attribute alanı en az :min karakter olabilir!',
            'category.max' => ':attribute alanı en az :max karakter olabilir!',
            'category.regex' => ':attribute alanı sadece harflerden oluşabilir!',
            'title.required' => ':attribute alanı boş bırakılamaz!',
            'title.min' => ':attribute alanı en az :min karakter olabilir!',
            'title.max' => ':attribute alanı en az :max karakter olabilir!',
            'description.required' => ':attribute alanı boş bırakılamaz!',
            'description.min' => ':attribute alanı en az :min karakter olabilir!',
            'description.max' => ':attribute alanı en az :max karakter olabilir!',
            'severity.required' => ':attribute alanı boş bırakılamaz!',
            'severity.min' => ':attribute alanı en az :min karakter olabilir!',
            'severity.max' => ':attribute alanı en az :max karakter olabilir!',
            'status.required' => ':attribute alanı boş bırakılamaz!',
            'status.min' => ':attribute alanı en az :min karakter olabilir!',
            'status.max' => ':attribute alanı en az :max karakter olabilir!',
            'assignee.required' => ':attribute alanı boş bırakılamaz!',
            'assignee.min' => ':attribute alanı en az :min karakter olabilir!',
            'assignee.max' => ':attribute alanı en az :max karakter olabilir!',

      ];
    }

    public function attributes()
    {
        return [
            'category' => 'Kategori',
            'title' => 'Talep',
            'description' => 'Detay',
            'severity' => 'Önem Kodu',
            'status' => 'Durum',
            'assignee' => 'Atanan Kişi',
        ];
    }
}
