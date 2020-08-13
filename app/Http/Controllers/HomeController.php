<?php

namespace App\Http\Controllers;

use App\ShippingMethod;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shipping_methods = ShippingMethod::all();

        return view('home', compact('shipping_methods'));
    }
}
