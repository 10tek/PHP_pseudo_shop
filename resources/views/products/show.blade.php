@extends('layouts.front')

@section('title', 'Товар')

@section('content')
    <img src="{{ $product->image }}">
    <h1>{{ $product->name }}</h1>
    <p>Цена: <b>{{ $product->price }}тг.</b></p>
    <p>{{ $product->description }}</p>
    <a class="btn btn-success" href="#">Добавить в корзину</a>
@endsection
