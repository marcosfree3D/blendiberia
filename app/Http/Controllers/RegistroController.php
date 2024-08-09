<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function index()
    {
        return view('registro');
    }
    public function store(Request $request)
    {
        return $request;
    }
}
