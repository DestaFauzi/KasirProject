<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the kasir dashboard.
     */
    public function kasirDashboard()
    {
        return view('kasir.dashboard');
    }
}
