<?php

namespace App\Http\Requests\Master\BranchUser;

use Illuminate\Foundation\Http\FormRequest;

class SetDefaultRequest extends FormRequest
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
            'user_id' => 'required',
            'branch_id' => 'required',
            'is_default' => 'required',
        ];
    }
}
