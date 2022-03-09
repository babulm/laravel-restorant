<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('frontend.pages.index');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function service()
    {
        return view('frontend.pages.service');
    }

    public function menu()
    {
        return view('frontend.pages.menu');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function pages()
    {
        return redirect('pages/testimonial');
    }

    public function testimonial()
    {
        return view('frontend.pages.testimonial');
    }

    public function booking()
    {
        return view('frontend.pages.booking');
    }

    public function team()
    {
        return view('frontend.pages.team');
    }
}
