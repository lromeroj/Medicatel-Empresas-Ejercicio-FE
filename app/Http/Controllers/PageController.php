<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return redirect('login');
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        return view('empresa.dashboard');
    }

    public function colaboradores(Request $request)
    {
        return view('empresa.colaboradores');
    }
}
