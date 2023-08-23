<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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
            //
            /*'country' => 'required|min:3',
            'Depart' => 'required',
            'Retour'=> 'required',
            'Image' => 'required|image',
            'date_Aller' => 'date',
            'date_Retour' => 'date',
            'description' => 'required',
            'capacity' => 'integer',
            'price' => 'integer',
            'available' => 'boolean'*/

        ];
    }
}
