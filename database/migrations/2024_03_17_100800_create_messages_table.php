<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('conversation_id')->comment('fk of conversations table');
            $table->unsignedInteger('sender_id')->comment('fk of users table');
            $table->string('message_content', 255);
            $table->string('status', 32)->comment('DELIVERD, READ')->default('DELIVERD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
