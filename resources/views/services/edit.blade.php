@extends('layouts.app')

@section('content')
<div class="max-w-2xl bg-white shadow p-6 rounded mx-auto">
    <h2 class="text-2xl text-green-600 font-bold mb-4">Update Services </h2>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Core Services Title</label>
        <input type="text" name="core_services_title" value="{{ old('core_services_title', $service->core_services_title) }}" class="w-full border p-2 mb-4">

        <label>Core Services Content</label>
        <textarea name="core_services_content" class="w-full border p-2 mb-4">{{ old('core_services_content', $service->core_services_content) }}</textarea>

        <label>Logistics Title</label>
        <input type="text" name="logistics_title" value="{{ old('logistics_title', $service->logistics_title) }}" class="w-full border p-2 mb-4">

        <label>Logistics Content</label>
        <textarea name="logistics_content" class="w-full border p-2 mb-4">{{ old('logistics_content', $service->logistics_content) }}</textarea>

        <label>Image</label>
        <input type="file" name="image" class="w-full border p-2 mb-4">
        @if($service->image)
            <img src="{{ asset('storage/'.$service->image) }}" class="w-16 h-16 rounded-full mb-4">
        @endif

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save Changes</button>
    </form>
</div>
@endsection
