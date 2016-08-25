<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStory extends FormRequest
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
            'slug'          => 'required',
            'runsheet_slug' => 'required',
            'title'         => 'required',
            'issue'         => 'required',
            'publish_date'  => 'required',
            'cDeck'         => 'required',
            'byline'        => 'required',
            'section'       => 'required',
            'body'          => 'required',
            'priority'      => 'required',
        ];
    }
}
