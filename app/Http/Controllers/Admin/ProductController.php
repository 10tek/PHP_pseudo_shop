<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index() {
        $products = Product::query()
            ->latest()
            ->paginate(10);

        return view('admin.products.index', [
            'title' => 'Все товары',
            'products' => $products
        ]);
    }

    public function create() {
        return view('admin.products.form', [
            'title' => 'Новый продукт',
            'categories' => Category::query()->orderBy('name')->get()
        ]);
    }

    public function store(ProductFormRequest $request) {
        Product::query()
            ->create($request->validated());

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product) {
        return view('admin.products.form', [
            'product' => $product,
            'title' => 'Редактировать продукт',
            'categories' => Category::query()->orderBy('name')->get()
        ]);
    }

    public function update(ProductFormRequest $request, Product $product) {
        $product->update($request->validated());
        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
