<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }

    public function validationData(): array
    {
        return array_merge(
            $this->request->all(),
        );
    }
}
