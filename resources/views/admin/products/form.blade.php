<?php
$product = $product ?? null;
?>

@extends('layouts.admin')

@section('content')

    <h1 class="mb-3">{{ $title }}</h1>

    <div class="row">

        <div class="col-12 col-md-6">

            <form action="{{ route($product ? 'admin.products.update' : 'admin.products.store', $product) }}" method="post" class="card card-body">
                @csrf
                @if($product) @method('put') @endif


                <div class="form-group">
                    <label for="name">Название <span class="text-danger">*</span></label>
                    <input required
                           class="form-control @error('name') is-invalid @enderror "
                           value="{{ old('name', $product->name ?? null) }}"
                           type="text" name="name" id="name" placeholder="Введите имя...">

                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="code">Короткое имя <span class="text-danger">*</span></label>
                    <input required
                           class="form-control @error('code') is-invalid @enderror "
                           value="{{ old('code', $product->code ?? null) }}"
                           type="text" name="code" id="code" placeholder="Короткое имя ссылки...">

                    @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Категория <span class="text-danger">*</span></label>
                    <select class="form-control @error('category_id') is-invalid @enderror " name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ old('category_id', $product->category_id ?? null) == $category->id ? 'selected' : '' }}
                                value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Цена <span class="text-danger">*</span></label>
                    <input required
                           class="form-control @error('price') is-invalid @enderror "
                           value="{{ old('price', $product->price ?? null) }}"
                           type="text" name="price" id="price" placeholder="Введите цену...">

                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Фото <span class="text-danger">*</span></label>
                    <input required
                           class="form-control @error('image') is-invalid @enderror "
                           value="{{ old('image', $product->image ?? null) }}"
                           type="text" name="image" id="image" placeholder="Введите URL картинки...">

                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Описание продукта <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror "
                              name="description"
                              id="description"
                              rows="5"
                              placeholder="Опишите продукт">{{ old('description', $product->description ?? null) }}</textarea>

                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <button class="btn btn-success">
                    Сохранить
                </button>

            </form>

        </div>

    </div>

@endsection
