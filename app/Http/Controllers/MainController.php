<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::query()
            ->latest()
            ->paginate(10);

        return view('products.index', [
            'title' => 'Все товары',
            'products' => $products
        ]);
    }

    public function categories(){
        return view('categories.index', [
            'title' => 'Все категории',
            'categories' =>  Category::get()
        ]);
    }

    public function productsByCategory(Category $category){
        return view('products.index', [
            'title' => "Все товары категории: {$category->name}",
            'products' => $category->products()->latest()->paginate(10)
        ]);
    }

    public function product(Product $product){
        return view('products.show',[
            'product' => $product
        ]);
    }
}
