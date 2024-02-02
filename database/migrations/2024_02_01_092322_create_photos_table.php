<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
    
            Schema::create('photos', function (Blueprint $table) {
                $table->id();
                $table->string('image');
                $table->foreignId('aventure_id')
                    ->references('id')
                    ->on('aventures')
                    ->onDelete('cascade');
                    $table->timestamps();
                });    
        Schema::enableForeignKeyConstraints();
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
};
