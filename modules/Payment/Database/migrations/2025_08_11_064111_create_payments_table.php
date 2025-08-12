<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Order\Fields\OrderFields;
use Modules\Payment\Fields\PaymentFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(PaymentFields::_TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(OrderFields::_FOREIGN_KEY)->constrained(OrderFields::_TABLE);
            $table->decimal(PaymentFields::_AMOUNT, 11, 2);
            $table->string(PaymentFields::_TRANSACTION_ID, 128);
            $table->tinyInteger(PaymentFields::_GATEWAY)->default(1);
            $table->tinyInteger(PaymentFields::_STATUS)->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(PaymentFields::_TABLE);
    }
};
