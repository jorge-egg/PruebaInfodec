<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang) //es -> español - de -> alemán
    {
        Session::put('locale', $lang);
        $idioma = $lang;
        //dd($idioma);
        return redirect()->back()->with('status', $idioma);
    }
}


