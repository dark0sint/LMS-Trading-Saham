<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $courses = $user->courses;
        return view('dashboard.index', compact('courses'));
    }
}
