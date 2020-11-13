@extends('layouts.app')

@section('navbar')
{{--    @if(@auth()->user()->isAdmin())--}}
{{--        @include('layouts.admin')--}}
{{--    @else--}}
        <x-navbar.link href="{{ route('main.index') }}">
            Все товары
        </x-navbar.link>

        <x-navbar.link href="{{ route('main.categories') }}">
            Категории
        </x-navbar.link>
{{--    @endif--}}
@endsection
