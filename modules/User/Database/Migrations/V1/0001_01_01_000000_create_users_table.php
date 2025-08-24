<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Support\Enums\V1\Entities\Entities;
use Modules\User\Entities\V1\User\UserFields;
use Modules\User\Enums\V1\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Entities::User->table(), function (Blueprint $table) {
            $table->id();
            $table->string(UserFields::FIRTSNAME);
            $table->string(UserFields::LASTNAME);
            $table->string(UserFields::EMAIL)->unique();
            $table->string(UserFields::MOBILE)->unique();
            $table->timestamp(UserFields::EMAIL_VERIFIED_AT)->nullable();
            $table->timestamp(UserFields::MOBILE_VERIFIED_AT)->nullable();
            $table->string(UserFields::PASSWORD);
            $table->tinyInteger(UserFields::ROLE)->default(Role::Admin->value);
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
