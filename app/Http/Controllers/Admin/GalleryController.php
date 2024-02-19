<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::paginate(10);
        return view('admin.gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName1 =  null;
        if ($request->hasFile('image')) {

            $fileName1 = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/gallery/'), $fileName1);
        }

        Gallery::create([
            'image' => $fileName1,
        ]);
        request()->session()->flash('success', 'Successfully created');

        return redirect()->to('admin/gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::find($id);
        $fileName1 =  $gallery->image;
        if ($request->hasFile('image')) {

            $fileName1 = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/gallery/'), $fileName1);
        }

        $gallery->update([
            'image' => $fileName1,
        ]);
        request()->session()->flash('success', 'Successfully update');

        return redirect()->to('admin/gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findorFail($id);
        \File::delete(public_path('/uploads/gallery/'.$gallery->image));
        $status = $gallery->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted');
        } else {
            request()->session()->flash('error', 'There is an error while deleting testimonial');
        }
        return redirect()->route('gallery.index');
    }
}
