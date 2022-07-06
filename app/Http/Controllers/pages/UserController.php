<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Brid;
use App\Models\Payment;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth()->user();

        return view('pages.alluser', compact(['user']));
    }
}
