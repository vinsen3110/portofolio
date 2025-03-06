<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.homepage'); // Pastikan 'homepage.blade.php' ada di 'resources/views/frontend'
    }

    public function photoboth()
    {
        return view('frontend.photoboth'); // Pastikan 'photobooth.blade.php' ada di 'resources/views'
    }
}


