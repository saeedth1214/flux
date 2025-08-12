<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Book\Fields\BookFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(BookFields::_TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(BookFields::_TITLE, 512)->unique();
            $table->string(BookFields::_SLUG, 512)->unique();
            $table->string(BookFields::_AUTHOR, 512)->nullable();
            $table->tinyInteger(BookFields::_TYPE)->default(1);
            $table->tinyInteger(BookFields::_STATUS)->default(1);
            $table->decimal(BookFields::_PRICE, 11, 2);
            $table->decimal(BookFields::_WEIGHT, 11, 2)->nullable();
            $table->tinyInteger(BookFields::_STOCK_QUANTITY)->default(0);
            $table->string(BookFields::_COVER_IMAGE, 2048)->nullable();
            $table->text(BookFields::_DESCRIPTION)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(BookFields::_TABLE);
    }
};
