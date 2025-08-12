<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Book\Fields\BookFields;
use Modules\User\Fields\UserFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(BookFields::_BOOK_TRANSLATOR_TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(UserFields::_FOREIGN_KEY)->constrained(UserFields::_TABLE);
            $table->foreignId(BookFields::_FOREIGN_KEY)->constrained(BookFields::_TABLE);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(BookFields::_BOOK_TRANSLATOR_TABLE);
    }
};
