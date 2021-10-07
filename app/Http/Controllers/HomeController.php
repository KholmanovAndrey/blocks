<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sale()
    {
        return view('sale');
    }

    public function payment_and_delivery()
    {
        return view('payment-and-delivery');
    }

    public function about()
    {
        return view('about', [
            'about' => Article::query()->where('name', '=', 'about')->first()
        ]);
    }

    public function award()
    {
        return view('award');
    }

    public function certificate()
    {
        return view('certificate');
    }

    public function contact()
    {
        return view('contact');
    }
}
