<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function home_section1()
    {
        $data['name'] = 'Home Section# 1';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function home_section2()
    {
        $data['name'] = 'Home Section# 2';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function home_section3()
    {
        $data['name'] = 'Home Section# 3';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function home_section4()
    {
        $data['name'] = 'Home Section# 4';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function home_section5()
    {
        $data['name'] = 'Home Section# 5';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function home_section6()
    {
        $data['name'] = 'Home Section# 6';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function about_section1()
    {
        $data['name'] = 'About Section# 1';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function about_section2()
    {
        $data['name'] = 'About Section# 2';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function about_section3()
    {
        $data['name'] = 'About Section# 3';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function about_section4()
    {
        $data['name'] = 'About Section# 4';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function get_section1()
    {
        $data['name'] = 'G.A.P Section# 1';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function available_section1()
    {
        $data['name'] = 'Pups Available Section# 1';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function available_section2()
    {
        $data['name'] = 'Pups Available Section# 2';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function available_section3()
    {
        $data['name'] = 'Pups Available Section# 3';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function available_section4()
    {
        $data['name'] = 'Pups Available Section# 4';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function breed_section1()
    {
        $data['name'] = 'Planned Breed Section# 1';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function stronger_section1()
    {
        $data['name'] = 'Bulldog Stronger Section# 1';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function stronger_section2()
    {
        $data['name'] = 'Bulldog Stronger Section# 2';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function stronger_section3()
    {
        $data['name'] = 'Bulldog Stronger Section# 3';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function stronger_section4()
    {
        $data['name'] = 'Bulldog Stronger Section# 4';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function stronger_section5()
    {
        $data['name'] = 'Bulldog Stronger Section# 5';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function stronger_section6()
    {
        $data['name'] = 'Bulldog Stronger Section# 6';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
}
