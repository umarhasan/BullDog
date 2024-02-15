<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurServiceController extends Controller
{
    public function index()
    {
        $services = OurService::all();
        return view('admin.our_services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.our_services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        OurService::create($validatedData);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit(OurService $service)
    {
        return view('admin.our_services.edit', compact('service'));
    }

    public function update(Request $request, OurService $service)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $service->update($validatedData);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(OurService $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
