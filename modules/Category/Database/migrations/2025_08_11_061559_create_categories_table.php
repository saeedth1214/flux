<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Category\Entities\Category;
use Modules\Category\Fields\CategoryFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(CategoryFields::_TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(CategoryFields::_NAME, 256)->unique();
            $table->string(CategoryFields::_SLUG, 256)->unique();
            $table->foreignIdFor(Category::class, CategoryFields::_PARENT_ID)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(CategoryFields::_TABLE);
    }
};
