<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function single_shipment(): string
    {
        return view('single_shipment');
    }
}
