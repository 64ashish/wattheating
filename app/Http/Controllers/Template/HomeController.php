<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    //
    public function index(): View
    {
        return view('pages.index');
    }

    public function categories():view
    {
        return view('pages.category');
    }

    public function product():view
    {
        return view('pages.product');
    }

    public function about():view
    {
        return view('pages.about');
    }

    public function aktuellt():view
    {
        return view('pages.news');
    }

    public function garanti():view
    {
        return view('pages.guarantee');
    }

    public function single():view
    {
        return view('pages.single-news');
    }

    public function kontakt():view
    {
        return view('pages.contact');
    }
}
