<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepostRequest extends FormRequest
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
        'title' => 'required|max:50',
        'cover_image' => 'image|max:550'

        ];
    }
    public function messages(){
        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'il titolo deve essere lungo al massimo :max caratteri',
            'cover_image.image' => 'il file conteiene un formato non supportato',
            'cover_image.max' => 'il nome del file deve contenere piu di 550 caratteri'
        ];
    }
}
