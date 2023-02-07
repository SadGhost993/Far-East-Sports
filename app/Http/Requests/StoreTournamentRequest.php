<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTournamentRequest extends FormRequest
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
            'kind_of_sport_id' => ['required', 'int'],
            'team_id' => ['required', 'int'],
            'rival_id' => ['required', 'int'],
            'start' => ['date', 'after:now'],
            'end' => ['date', 'after:now'],
        ];
    }
}
