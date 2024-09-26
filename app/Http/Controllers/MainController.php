<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class MainController extends Controller
{
    // Main Controller to render Inertia pages

    public function home()  {
        return Inertia::render('Home');
    }

    public function about()  {
        return Inertia::render('About');
    }

    public function services() {
        return Inertia::render('Services');

    }
    public function faq() {
        return Inertia::render('Faq');
    }

    public function contact()  {
        return Inertia::render('Contact');
    }

}
