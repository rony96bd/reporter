<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Listeners\LogListener;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Brid;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth()->user();

        return view('pages.index', compact(['user']));
    }

    public function changePassword()
    {
        return view('pages.change-password');
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'old_password' => 'required',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old password Does not match");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password Changed Successfully!");
    }
}
