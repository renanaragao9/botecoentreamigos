<?php

namespace App\Http\Controllers;

use App\Models\AboutFeature;
use App\Models\AboutSection;
use App\Models\Chef;
use App\Models\ContactInfo;
use App\Models\EventItem;
use App\Models\GalleryImage;
use App\Models\MenuCategory;
use App\Models\Special;
use App\Models\Testimonial;
use App\Models\WhyUsItem;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'aboutSection' => AboutSection::first(),
            'aboutFeatures' => AboutFeature::all(),
            'whyUsItems' => WhyUsItem::all(),
            'specials' => Special::all(),
            'events' => EventItem::with('features')->get(),
            'testimonials' => Testimonial::all(),
            'galleryImages' => GalleryImage::all(),
            'chefs' => Chef::all(),
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
