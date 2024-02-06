<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnRentController extends Controller
{
    public function index()
    {
        return view('dashboard.returnrent.index');
    }
}
