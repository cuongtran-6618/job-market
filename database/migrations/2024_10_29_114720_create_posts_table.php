<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Post::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('customer_id')->references('id')->on(User::TABLE_NAME);
            $table->integer('category_id')->references('id')->on(Category::TABLE_NAME);
            $table->integer('city_id')->references('id')->on('cities');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Post::TABLE_NAME);
    }
};
