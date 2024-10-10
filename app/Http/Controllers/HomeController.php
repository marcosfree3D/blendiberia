<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class HomeController extends Controller
{
    public function index()
    {
        $conferencias = DB::table("conferencias")
            ->orderBy("orden", "asc")
            ->get();
        $talleres = DB::table("talleres")->orderBy("orden", "asc")->get();

        $ponentes = DB::select("select * from ponentes order by orden");
        /*$ponentes = DB::select('select * from ponentes '); */

        return view(
            "principal",
            compact("conferencias", "ponentes", "talleres")
        );
    }
}
