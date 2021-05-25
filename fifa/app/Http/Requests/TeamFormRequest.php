<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamFormRequest extends FormRequest
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
            //
            'name' => 'required',
            'group_no' => 'required',
            'coach' => 'required',
            'match_played' => 'required',
            'goals' => 'required',
            'ranking' => 'required',
            'cup_win' => 'required',
        ];
    }
}
