<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function edit()
    {
        $service = Service::first();
        if (!$service) {
            $service = Service::create([
                'core_services_title' => '',
                'core_services_content' => '',
                'logistics_title' => '',
                'logistics_content' => '',
                'image' => null,
            ]);
        }
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'core_services_title' => 'required',
            'core_services_content' => 'required',
            'logistics_title' => 'required',
            'logistics_content' => 'required',
            'image' => 'nullable|image'
        ]);

        $service = Service::findOrFail($id);

        $data = $request->only([
            'core_services_title', 'core_services_content',
            'logistics_title', 'logistics_content'
        ]);

        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('home')->with('success', 'Services updated successfully');
    }
}

