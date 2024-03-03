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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('game_name')->comment('ชื่อเกม');
            $table->text('game_detail')->comment('รายละเอียด');
            $table->string('game_price')->nullable()->comment('ราคาเกม');
            $table->string('game_url_video')->comment('Link วีดีโอ');
            $table->string('game_img_logo')->comment('รูปโลโก้เกม');
            $table->string('game_img')->nullable()->comment('รูปเกม');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
