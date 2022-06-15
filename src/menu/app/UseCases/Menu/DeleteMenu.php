<?php

namespace App\UseCases\Menu;

use App\Http\Requests\Menu\DeleteRequest;
use App\Models\Menu;

class DeleteMenu
{
    public function invoke(DeleteRequest $request) {
        Menu::findOrFail($request->id)->delete();
    }
}
