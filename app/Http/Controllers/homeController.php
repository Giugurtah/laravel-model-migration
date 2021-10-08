<?php

namespace App\Http\Controllers;

use App\Models\Travel;

class homeController extends Controller
{
    public function index() {
        $travels = Travel::all();
        return view('home', compact('travels'));
    }
}
