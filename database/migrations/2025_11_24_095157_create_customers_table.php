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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('family');
            $table->bigInteger('mobile');
            $table->enum('gender', ['man', 'woman']);
            $table->date('birth_date');
            $table->bigInteger('national_code')->nullable()->unique();
            $table->integer('province_id');
            $table->integer('city_id');
            $table->string('job');
            $table->string('username');
            $table->string('password');
            $table->double('lat');
            $table->double('lan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
