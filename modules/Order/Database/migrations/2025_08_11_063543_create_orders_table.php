<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Order\Fields\OrderFields;
use Modules\User\Fields\UserFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(OrderFields::_TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(OrderFields::_USER_ID)->constrained(UserFields::_TABLE);
            $table->decimal(OrderFields::_TOTAL_PRICE, 11, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(OrderFields::_TABLE);
    }
};
