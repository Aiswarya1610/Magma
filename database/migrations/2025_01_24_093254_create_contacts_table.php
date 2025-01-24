<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); 
            $table->string('contact_name', 255);
            $table->string('contact_email', 255); 
            $table->string('contact_phone', 20); 
            $table->string('contact_location', 255); 
            $table->enum('property_type', ['residential', 'commercial', 'industrial', 'land']); 
            $table->text('contact_message')->nullable(); 
            $table->timestamps(); 
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
