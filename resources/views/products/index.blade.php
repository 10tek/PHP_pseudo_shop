@extends('layouts.front')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="mb-0">
            {{ $title }}
        </h1>
    </div>

    @if($products->isEmpty())

        <div class="alert alert-secondary">
            Товаров нет
        </div>

    @else

        @foreach($products as $product)
            <div class="d-flex justify-content-around flex-wrap">
                @include('components.product-card')
            </div>
        @endforeach

    @endif

@endsection
