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
            "texte" => 'required|min:10',
            "categorie" => 'required|exists:categories,id'
        ];
    }

    public function messages(){
        return [
            'titre.required' => 'Le :attribute est requis',
            'titre.min' => 'Le :attribute doit avoir une longueur minimale de :min caractères',  
            'titre.max' => 'Le :attribute doit avoir une longueur minimale de :max caractères',  
            'texte.required' => 'Le :attribute de la publication est obligatoire',
            'texte.min' => 'La longueur du :attribute doit être d\'au moins 10 caractères',
            'categorie.required' => 'La catégorie est requise',
            'categorie.exists' => 'La catégorie sélectionnée n\'existe pas'
        ];
    }
}
