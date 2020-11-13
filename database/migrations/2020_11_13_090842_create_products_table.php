<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

    public function up() {
        Schema::create('products', function (Blueprint $table)
        {
            $table->id();

            $table->foreignIdFor(Category::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('name');
            $table->string('code');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->double('price')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
}
