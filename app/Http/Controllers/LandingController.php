<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua barang yang ada di database
        return view('welcome', compact('menus'));
    }
}
