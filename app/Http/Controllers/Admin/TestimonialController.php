<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial.create', compact('testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName1 =  null;
        if ($request->hasFile('image')) {

            $fileName1 = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/testimonial/'), $fileName1);
        }

        Testimonial::create([
            'image' => $fileName1,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        request()->session()->flash('success', 'Successfully created');

        return redirect()->to('admin/testimonial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::find($id);
        $fileName1 =  $testimonial->image;
        if ($request->hasFile('image')) {

            $fileName1 = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/testimonial/'), $fileName1);
        }

        $testimonial->update([
            'image' => $fileName1,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        request()->session()->flash('success', 'Successfully update');

        return redirect()->to('admin/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Testimonial::findorFail($id);
        $status = $delete->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted');
        } else {
            request()->session()->flash('error', 'There is an error while deleting testimonial');
        }
        return redirect()->route('testimonial.index');
    }
}
