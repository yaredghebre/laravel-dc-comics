<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:30',
            'thumb' => 'required',
            'price' => 'required|min:1|max:100',
            'series' => 'required|min:5|max:100',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:30',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare :max caratteri',

            'thumb.required' => 'L\'Immagine è obbligatoria',

            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve essere lungo almeno :min caratteri',
            'price.max' => 'Il prezzo non deve superare :max caratteri',

            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve essere lungo almeno :min caratteri',
            'series.max' => 'La serie non deve superare :max caratteri',

            'sale_date.required' => 'La data è obbligatoria',
            'sale_date.min' => 'La data deve essere lungo almeno :min caratteri',
            'sale_date.max' => 'La data non deve superare :max caratteri',

            'type.required' => 'La tipologia è obbligatoria',
            'type.min' => 'La tipologia deve essere lungo almeno :min caratteri',
            'type.max' => 'La tipologia non deve superare :max caratteri',

            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve essere lungo almeno :min caratteri',
            'description.max' => 'La descrizione non deve superare :max caratteri',
        ];
    }
}
