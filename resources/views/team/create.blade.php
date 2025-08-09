@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-green-600">Add New Employee</h2>

    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Employee Name" class="border p-2 w-full rounded" required>
        <input type="text" name="role" placeholder="Position" class="border p-2 w-full rounded" required>
        <input type="text" name="phone" placeholder="Phone Number" class="border p-2 w-full rounded" required>
        <input type="file" name="image" class="border p-2 w-full rounded">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Add New Employee</button>
    </form>
</div>
@endsection
