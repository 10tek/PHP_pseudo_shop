@extends('layouts.front')

@section('title', 'Все категории')


@section('content')

    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="mb-0">
            {{ $title }}
        </h1>
    </div>

    @foreach($categories as $category)
        <div class="card col-sm-4">
            <a href="{{ route('main.by-category', [$category])}}">
                <img class="img-thumbnail" src="{{ $category->image }}">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>
    @endforeach
@endsection
