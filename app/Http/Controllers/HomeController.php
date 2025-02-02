<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        return inertia('LandingPage', [
            'user' => $user,
        ]);
    }
}
