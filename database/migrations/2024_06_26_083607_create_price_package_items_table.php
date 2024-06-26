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
        Schema::create('price_package_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->boolean('item_availability');
            // foreign key constrains
            $table->foreignId('package_id')->constrained('pricings', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_package_items');
    }
};
