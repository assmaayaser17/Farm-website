@extends('layouts.app')

@section('content')
<div class="max-w-2xl bg-white shadow p-6 rounded">
    <h2 class="text-2xl text-green-600 font-bold mb-4">Update About</h2>

    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label class="block">Title</label>
        <input type="text" name="title" value="{{ old('title', $about->title) }}" class="w-full border p-2 mb-4">

        <label class="block">Intro</label>
        <input type="text" name="intro" value="{{ old('intro', $about->intro) }}" class="w-full border p-2 mb-4">

        <label class="block">Details</label>
        <textarea name="details" class="w-full border p-2 mb-4">{{ old('details', $about->details) }}</textarea>

        <label class="block">Image</label>
        <input type="file" name="image" class="w-full border p-2 mb-4">
        @if($about->image)
            <img src="{{ asset('storage/'.$about->image) }}" class="w-16 h-16 rounded-full mb-4">
        @endif

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save Changes</button>
    </form>
</div>
@endsection
