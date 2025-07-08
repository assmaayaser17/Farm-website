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
         $table->id();
        $table->string('name');                     
        $table->string('season')->nullable();    
        $table->string('variety')->nullable();      
        $table->text('specification')->nullable(); 
        $table->string('sizes')->nullable();       
        $table->string('package')->nullable();     
        $table->text('imagepath')->nullable(); 
        $table->timestamps();
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
