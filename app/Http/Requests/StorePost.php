<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "titulo"=>"required|max:100",
            "contenido"=>"required",
            "imagen-cabecera"=>"nulleable"
        ];
    }

    public function attributes()
    {
        return [

        ];
    }

    public function menssages(){
        return [

        ];
    }
}
