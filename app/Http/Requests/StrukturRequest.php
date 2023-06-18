<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StrukturRequest extends FormRequest
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
        if ($this->method() == 'POST') {
            return [
                
                'image'     => 'required|image|max:1024',
                
            ];
        }

        return [
           
            'image'     => 'image|max:1024',
           
        ];
    }

    public function messages()
    {
        return [
            
            'image.required'    => 'Gambar tidak boleh kosong.',
            'image.image'       => 'Gambar yang dimasukan tidak valid.',
            'image.max'         => 'Maksimal Gambar tidak boleh leboh dari 1MB',
           
        ];
    }
}
