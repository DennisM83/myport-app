<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function admin()
    {
        return view('admin.admin-main');
    }
}
