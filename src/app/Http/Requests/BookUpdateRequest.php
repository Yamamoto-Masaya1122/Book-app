<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'isbn_code' => ['required', 'max:255'],
            'author' => ['required', 'max:255'],
            'publishing_company' => ['required', 'max:255'],
            'price' => ['nullable', 'integer']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'isbn_code.required' => 'ISBNコードは必ず入力してください。',
            'isbn_code.max' => 'ISBNコードは255文字以内で入力してください。',
            'author.required' => '著者は必ず入力してください。',
            'author.max' => '著者は255文字以内で入力してください。',
            'publishing_company.required' => '出版社は必ず入力してください。',
            'publishing_company.max' => '出版社は255文字以内で入力してください。',
            'price.integer' => '価格は半角数字で入力してください。',
        ];
    }
}
