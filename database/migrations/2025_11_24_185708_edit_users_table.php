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
        Schema::table('users', function (Blueprint $table) {
            $table->string('family');
            $table->bigInteger('mobile');
            $table->enum('gender', ['man', 'woman']);
            $table->date('birth_date')->nullable();
            $table->bigInteger('national_code')->nullable()->unique();
            $table->integer('province_id');
            $table->integer('city_id');
            $table->string('job')->nullable();
            $table->string('username');
            $table->double('lat')->nullable();
            $table->double('lan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('family');
            $table->dropColumn('mobile');
            $table->dropColumn('gender');
            $table->dropColumn('birth_date');
            $table->dropColumn('national_code');
            $table->dropColumn('province_id');
            $table->dropColumn('city_id');
            $table->dropColumn('job');
            $table->dropColumn('username');
            $table->dropColumn('lat');
            $table->dropColumn('lan');
        });
    }
};
