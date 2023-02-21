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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'slug' => 'required',
            'cover'=> 'required|file|mimes:jpeg,jpg,png',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required'


        ];
    }

    public function messages(){
        return [
            'name.required' => 'Obrigatório inserir um nome',
            'slug,required' => 'Obrigatório inserir o slug',
            'cover.required' => 'Obrigatório inserir uma imagem',
            'price.required' => 'Obrigatório inserir um preço',
            'description.required' => 'Obrigatório inserir uma descrição',
            'stock.required' => 'Obrigatório inserir uma quantidade'
        ];
    }
}
