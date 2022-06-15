<?php

namespace App\UseCases\Menu;

use App\Http\Requests\Menu\SearchRequest;
use App\Models\Menu;

class SearchMenu
{
    public function invoke(SearchRequest $request) {
        return Menu::all();
    }
}
