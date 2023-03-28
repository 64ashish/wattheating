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
}
