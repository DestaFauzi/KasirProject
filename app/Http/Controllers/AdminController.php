<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // dd('Admin Dashboard');
        return view('admin.dashboard'); // Pastikan view ini ada
    }
}