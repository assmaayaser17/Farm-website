@extends('layouts.master')

@section('content')

<h1 class="text-2xl font-bold">Categories</h1>
<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ url('/categories/' . $category->id) }}" class="text-blue-600">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>


@endsection