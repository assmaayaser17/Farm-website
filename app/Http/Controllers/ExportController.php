<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Export;

class ExportController extends Controller
{
    public function edit()
    {
        $export = Export::first();

        if (!$export) {
            $export = Export::create([
                'title' => '',
                'content' => '',
                'image' => null,
            ]);
        }

        return view('export.edit', compact('export'));
    }

    public function update(Request $request)
    {
        $export = Export::first();

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['title', 'content']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('exports', 'public');
            $data['image'] = $path;
        }

        $export->update($data);

        return redirect()->route('export.edit')->with('success', 'Export Updated Successfully');
    }
}
