@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug}}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" 
                                class="card-img-top" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill bg-dark bg-opacity-25 p-4 fs-3">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($categories as $category)
    <ul class="mb-4">
        <li>
            <h2>
                <a href="/categories/{{ $category->slug}}">{{ $category->name }}</a>
            </h2>
        </li>
    </ul>
    @endforeach --}}
@endsection
