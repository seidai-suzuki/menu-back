<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [];
    }

    public function validationData(): array
    {
        return array_merge(
            $this->request->all()
        );
    }
}
