<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index()
    {
        return view('customer.home');
    }
}