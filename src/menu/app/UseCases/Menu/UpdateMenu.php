<?php

namespace App\UseCases\Menu;

use App\Http\Requests\Menu\UpdateRequest;
use App\Models\Menu;

class UpdateMenu
{
    public function invoke(UpdateRequest $request) {
        $menu = Menu::whereId($request->id);
        $menu->update([
            'name' => $request->name,
        ]);
        return $menu->first();
    }
}
