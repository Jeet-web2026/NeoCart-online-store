<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendor_logins', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_login_id')->unique();
            $table->string('vendor_login_password');
            $table->timestamp('used_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendor_logins');
    }
};
