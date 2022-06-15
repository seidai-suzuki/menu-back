<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required',
            'name' => 'required'
        ];
    }

    public function validationData(): array
    {
        return array_merge(
            $this->request->all(),
            [
                'id' => $this->id,
            ]
        );
    }
}
