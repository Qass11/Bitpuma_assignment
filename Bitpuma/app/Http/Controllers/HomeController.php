<?php

namespace App\Http\Controllers;

use App\Models\Records;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = User::orderBy('created_at', 'desc')->get()->all(); // desc > nieuwste boven / asc -> oudste boven
        return view('home')->with('records', $records);
    }
}
