<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getJson(){
        return response()->json(['name' => 'john']);
    }

    public function getRandomMenu() {
        return response()->json(Menu::inRandomOrder()->first());
    }
}
