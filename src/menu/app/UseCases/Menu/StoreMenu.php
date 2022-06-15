<?php

namespace App\UseCases\Menu;

use App\Http\Requests\Menu\StoreRequest;
use App\Models\Menu;

class StoreMenu
{
    public function invoke(StoreRequest $request) {
        return Menu::create([
            'name' => $request->name,
        ]);
    }
}
