<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    // عرض صفحة Edit مباشرة (لأن عندك record واحد بس)
    public function edit()
    {
        $about = About::first(); // بنجيب أول record فقط
       if (!$about) {
        // لو مفيش record أنشئه فاضي عشان متجيش null
        $about = About::create([
            'title' => '',
            'intro' => '',
            'details' => '',
            'image' => null
        ]);
    }
    return view('abouts.edit', compact('about'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'intro' => 'required',
            'details' => 'required',
            'image' => 'nullable|image'
        ]);

        $about = About::findOrFail($id);

        $data = $request->only('title', 'intro', 'details');

        if ($request->hasFile('image')) {
        
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('about', 'public');
        }

        $about->update($data);

        return redirect()->route('home')->with('success', 'About updated successfully');
    }
}


