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
        Schema::table('products', function (Blueprint $table) {
            $table->set('color', ['white', 'black', 'red', 'blue']);
            $table->set('Size', ['s', 'm', 'l', 'x','2x']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prrodacts', function (Blueprint $table) {
            //
        });
    }
};
