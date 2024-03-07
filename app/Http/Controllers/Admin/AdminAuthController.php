<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    public function login(): View
    {
        return view('admin.auth.login');
    }

    public function dashboard(): View
    {
        return view('admin.dashboard.index');
    }
}
