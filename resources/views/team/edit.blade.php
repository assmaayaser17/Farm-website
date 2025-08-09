@extends('layouts.app')

@section('content')
<div class="max-w-2xl bg-white ">
    <h2 class="text-2xl font-bold mb-4 text-green-600">Update Employee</h2>

    <form action="{{ route('team.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium text-green-600">Name</label>
            <input type="text" name="name" value="{{ old('name', $employee->name) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-green-600">Role</label>
            <input type="text" name="role" value="{{ old('role', $employee->role) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-green-600">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block font-medium text-green-600">Image (optional)</label>
            <input type="file" name="image" class="w-full border rounded p-2">
            @if($employee->image)
                <img src="{{ asset('storage/'.$employee->image) }}" alt="" class="w-16 h-16 mt-2 rounded-full">
            @endif
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save Changes</button>
        </div>
    </form>
</div>
@endsection
