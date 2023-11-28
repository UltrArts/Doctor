<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    /**
     * Mostra a página home
     * 
     * @return void
     */
    public function index()
    {
        return 
        // Auth::check() ?
        //     redirect()->back()
         view('home');
    }
}
