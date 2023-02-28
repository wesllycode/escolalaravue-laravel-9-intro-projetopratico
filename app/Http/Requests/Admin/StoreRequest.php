<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): mixed
    {

        return [
            'name' => 'string|required',
            'slug' => 'string|nullable',
            'cover'=> 'nullable',
            'price' => 'string|required',
            'description' => 'required|string',
            'stock' => 'string|nullable'


        ];
    }

    /** 
     * Get he errors messagens personalized
     * 
     * @return array
    */   

    public function messages(){
        return [
            'name.required' => 'Obrigatório inserir um nome',
            'slug,required' => 'Obrigatório inserir o slug',
            'cover.required' => 'Obrigatório inserir uma imagem',
            'price.required' => 'Obrigatório inserir um preço',
            'description.required' => 'Obrigatório inserir uma descrição',
            'stock.required' => 'Obrigatório inserir uma quantidade',
            'cover.mimes' => 'Apenas formato válido'
        ];
    }
}
