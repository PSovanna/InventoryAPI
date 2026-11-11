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
    Schema::create('products', function (Blueprint $table) {

        $table->id('ProductID');

        $table->string('ProductName',100);

        $table->string('Description')
                ->nullable();

        $table->unsignedBigInteger('CategoryID');

        $table->string('Barcode')
                ->nullable();

        $table->date('Expiredate')
                ->nullable();

        $table->integer('Qty')
                ->default(0);

        $table->decimal('UnitPriceIn',10,2)
                ->default(0);

        $table->decimal('UnitPriceOut',10,2)
                ->default(0);

        $table->string('ProductImage')
                ->nullable();

        $table->boolean('isDeleted')
                ->default(false);

        $table->timestamps();

        $table->foreign('CategoryID')
                ->references('category_id')
                ->on('categories')
                ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
