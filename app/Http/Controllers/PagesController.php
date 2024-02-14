<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data['pages'] = Pages::all();
        return view('admin.pages.home', $data);
    }
    public function about()
    {
        $data['name'] = 'About';
        $data['pages'] = About::where('page', $data['name'])->get();
        return view('admin.pages.about', $data);
    }
    public function store(Request $request)
    {


        foreach ($request->except('_token', '_method') as $key => $value) {
            Pages::updateOrCreate(['meta_key' => $key], ['meta_value' => $value]);
        }

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function aboutUpdate(Request $request, $id)
    {
        // dd($request->all());
        $metaData = About::findOrFail($id);
        $metaData->meta_key = $request->input('meta_key');
        $type = $request->input('type');

        // Check if the type is "file"
        if ($type === 'file') {
            if ($request->hasFile('value')) {
                $file = $request->file('value');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/files', $fileName);
                $metaValue = [
                    'type' => $type,
                    'value' => $fileName
                ];
            } else {
                return redirect()->back()->with('error', 'No file uploaded');
            }
        } else {
            // For other types, simply get the value from the request
            $metaValue = [
                'type' => $type,
                'value' => $request->input('value')
            ];
        }

        // Encode the meta value as JSON
        $metaData->meta_value = json_encode($metaValue);
        $metaData->save();
        // return redirect()->route('about.index')->with('success', 'Data updated successfully');
        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function aboutstore(Request $request)
    {
        // dd($request->all());
        $metaData = new About();

        $metaData->meta_key = $request->input('meta_key');
        $metaData->page = $request->input('page');
        $metaData->meta_value = json_encode([
            'type' => $request->input('type'),
            'value' => '',
        ]);
        $metaData->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function aboutEdit($id)
    {
        // dd('d');
        $data['metaData'] = About::findOrFail($id);
        $data['metaValue'] = json_decode($data['metaData']->meta_value, true);
        // dd($data);
        return view('admin.pages.aboutedit', $data);
    }
    public function aboutDestroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
