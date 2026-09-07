<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\MenuCategory;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'contactInfo' => ContactInfo::first(),
        ]);
    }

    public function menu()
    {
        return view('menu', [
            'menuCategories' => MenuCategory::with('items')->get(),
            'contactInfo' => ContactInfo::first(),
        ]);
    }
}
