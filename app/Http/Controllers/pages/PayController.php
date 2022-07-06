<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Brid;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PayController extends Controller
{
    public function index()
    {
        $user = Auth()->user();

        return view('pages.payinfo', compact(['user']));
    }
}
