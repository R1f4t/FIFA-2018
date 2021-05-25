<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchFormRequest extends FormRequest
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
            'team1' => 'required',
            'goal1' => 'required',
            'team2' => 'required',
            'goal2' => 'required',
            'winner' => 'required',
            'stadium' => 'required',
            'match_type' => 'required',
            'match_date' => 'required',
            'match_time' => 'required',
        ];
    }
}
