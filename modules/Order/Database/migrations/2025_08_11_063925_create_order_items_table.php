<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Book\Fields\BookFields;
use Modules\Order\Fields\OrderFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(OrderFields::_ORDER_ITEMS_TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(OrderFields::_FOREIGN_KEY)->constrained(OrderFields::_TABLE);
            $table->foreignId(BookFields::_FOREIGN_KEY)->constrained(BookFields::_TABLE);
            $table->tinyInteger(OrderFields::_QUANTITY)->default(1);
            $table->decimal(OrderFields::_TOTAL_PRICE, 11, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(OrderFields::_ORDER_ITEMS_TABLE);
    }
};
