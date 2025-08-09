@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <h2 class="text-2xl text-green-600 font-bold mb-5">Update Export </h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('export.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Title</label>
            <input type="text" name="title" value="{{ old('title', $export->title) }}" class="w-full border rounded p-2">
            @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Content</label>
            <textarea name="content" rows="5" class="w-full border rounded p-2">{{ old('content', $export->content) }}</textarea>
            @error('content') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Image</label>
            <input type="file" name="image" class="w-full border rounded p-2">
            @if($export->image)
                <img src="{{ asset('storage/'.$export->image) }}" class="w-32 mt-3">
            @endif
            @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded">Save Changes</button>
    </form>
</div>
@endsection
