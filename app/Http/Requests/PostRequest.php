<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "titre" => 'required|min:3|max:255',
            "texte" => 'required|min:10'
        ];
    }

    public function messages(){
        return [
            'titre.required' => 'Le titre est requis',
            'titre.min' => 'Le titre doit avoir une longueur minimale de 3 caractères',            
        ];
    }
}
