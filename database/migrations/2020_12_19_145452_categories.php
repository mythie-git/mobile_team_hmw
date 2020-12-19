<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("category_name");
            $table->timestamps();
        });

        $data = [
            'category_name'=>"Linear Algebra"
        ];

        \App\Models\Category::query()->insert($data);

        $data = [
            'category_name'=>"Differential Equations"
        ];

        \App\Models\Category::query()->insert($data);

        $data = [
            'category_name'=>"Calculus"
        ];

        \App\Models\Category::query()->insert($data);

        $data = [
            'category_name'=>"Introduction to Algorithms"
        ];

        \App\Models\Category::query()->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
