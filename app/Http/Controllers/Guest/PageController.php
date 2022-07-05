<?php

namespace App\Http\Controllers\Guest;

use App\Models\Lightsaber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $swords = Lightsaber::take(6)->get();
        return view('guest.welcome', compact('swords'));
    }
}
