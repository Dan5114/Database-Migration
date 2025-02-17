<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id(); // auto-incrementing primary key
            $table->string('name'); // item name
            $table->text('description')->nullable(); // optional item description
            $table->decimal('price', 8, 2); // item price (up to 999,999.99)
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // foreign key for categories table
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
