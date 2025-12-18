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
        Schema::table('addresses', function (Blueprint $table) {
            $table->renameColumn('customers_id', 'customer_id');
            $table->renameColumn('postel_code', 'postal_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->renameColumn('customer_id', 'customers_id');
            $table->renameColumn('postal_code', 'postel_code');
        });
    }
};
