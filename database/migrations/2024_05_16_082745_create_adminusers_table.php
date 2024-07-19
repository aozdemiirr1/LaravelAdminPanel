<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adminusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adminusers');
        Schema::table('adminusers', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};

