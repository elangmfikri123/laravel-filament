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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nia')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->enum('pac', 
            ['Karanganyar Kota','Mojogedang','Karangpandan', 'Jaten', 'Kebakkramat',
            'Jumantono', 'Tasikmadu']);
            $table->string('tahun_sah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
