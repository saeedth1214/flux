<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Book\Fields\BookFields;
use Modules\Category\Fields\CategoryFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(BookFields::_BOOK_CATEGORY_TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(BookFields::_FOREIGN_KEY)->constrained(BookFields::_TABLE);
            $table->foreignId(CategoryFields::_FOREIGN_KEY)
                ->constrained(CategoryFields::_TABLE);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(BookFields::_BOOK_CATEGORY_TABLE);
    }
};
