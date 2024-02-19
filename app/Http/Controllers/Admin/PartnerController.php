<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::paginate(10);
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName1 =  null;
        if ($request->hasFile('image')) {

            $fileName1 = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/partner/'), $fileName1);
        }

        Partner::create([
            'image' => $fileName1,
        ]);
        request()->session()->flash('success', 'Successfully created');

        return redirect()->to('admin/partner');
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
        $partner = Partner::find($id);
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = Partner::find($id);
        $fileName1 =  $partner->image;
        if ($request->hasFile('image')) {

            $fileName1 = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/partner/'), $fileName1);
        }

        $partner->update([
            'image' => $fileName1,
        ]);
        request()->session()->flash('success', 'Successfully update');

        return redirect()->to('admin/partner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findorFail($id);
        \File::delete(public_path('/uploads/partner/'.$partner->image));
        $status = $partner->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted');
        } else {
            request()->session()->flash('error', 'There is an error while deleting testimonial');
        }
        return redirect()->route('partner.index');
    }
}
