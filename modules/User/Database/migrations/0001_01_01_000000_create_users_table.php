<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\User\Fields\ResetTokenFields;
use Modules\User\Fields\SessionFields;
use Modules\User\Fields\UserFields;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(UserFields::_TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(UserFields::_NAME);
            $table->string(UserFields::_EMAIL)->unique();
            $table->timestamp(UserFields::_EMAIL_VERIFIED_AT)->nullable();
            $table->string(UserFields::_PASSWORD);
            $table->tinyInteger(UserFields::_ROLE)->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create(ResetTokenFields::_TABLE, function (Blueprint $table) {
            $table->string(ResetTokenFields::_EMAIL)->primary();
            $table->string(ResetTokenFields::_TOKEN);
            $table->timestamp(ResetTokenFields::_CREATED_AT)->nullable();
        });

        Schema::create(SessionFields::_TABLE, function (Blueprint $table) {
            $table->string(SessionFields::_ID)->primary();
            $table->foreignId(SessionFields::_USER_ID)->nullable()->index();
            $table->string(SessionFields::_IP_ADDRESS, 45)->nullable();
            $table->text(SessionFields::_USER_AGENT)->nullable();
            $table->longText(SessionFields::_PAYLOAD);
            $table->integer(SessionFields::_LAST_ACTIVITY)->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(UserFields::_TABLE);
        Schema::dropIfExists(ResetTokenFields::_TABLE);
        Schema::dropIfExists(SessionFields::_TABLE);
    }
};
