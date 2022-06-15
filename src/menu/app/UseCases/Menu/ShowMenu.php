<?php

namespace App\UseCases\Menu;

use App\Http\Requests\Menu\ShowRequest;
use App\Models\Menu;

class ShowMenu
{
    public function invoke(ShowRequest $request) {
        return Menu::findOrFail($request->id);
    }
}
