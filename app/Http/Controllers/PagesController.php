<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data['pages'] = Pages::all();
        return view('admin.pages.home', $data);
    }
    public function store(Request $request)
    {


        foreach ($request->except('_token','_method') as $key => $value) {
            Pages::updateOrCreate(['meta_key' => $key], ['meta_value' => $value]);
        }

        return redirect()->back()->with('success', 'Data updated successfully');
    }
}
