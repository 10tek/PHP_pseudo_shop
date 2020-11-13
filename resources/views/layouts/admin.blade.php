@extends('layouts.app', [
    'brand' => route('admin.dashboard')
])

@section('navbar')

    <x-navbar.link href="{{ route('admin.categories.index') }}">
        Категории
    </x-navbar.link>

    <x-navbar.link href="{{ route('admin.products.index') }}">
        Товары
    </x-navbar.link>

@endsection
