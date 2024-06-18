<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        Session::put('locale', $lang);
        $idioma = $lang;
        return redirect()->back()->with('status', $idioma);
    }
}


