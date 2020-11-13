@extends('layouts.admin')

@section('content')

    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h1 class="mb-0">{{ $title }}</h1>

        <a class="btn btn-success" href="{{ route('admin.products.create') }}">
            Добавить
        </a>
    </div>

    @if($products->isEmpty())

        <div class="alert alert-secondary">
            Нет товаров
        </div>

    @else

        <div class="card card-body">

            <table class="table table-bordered mb-0">

                <thead>
                <tr>
                    <th>Название</th>
                    <th width="1%"></th>
                </tr>
                </thead>

                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>
                            <form method="post" action="{{ route('admin.products.destroy', $product) }}">
                                @csrf @method('delete')

                                <div class="btn-group btn-group-sm">

                                    <a class="btn btn-info"
                                       href="{{ route('admin.products.edit', $product) }}">
                                        Ред.
                                    </a>

                                    <button class="btn btn-danger">
                                        Удалить
                                    </button>

                                </div>

                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>

        </div>

        @if($products->hasPages())
            <div class="mt-3">
                {{ $products->links() }}
            </div>
        @endif

    @endif

@endsection
