<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up()
    {
        Schema::create('Datas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->string('name');
            $table->string('category')->nullable();
            $table->string('weight');
            $table->string('photo', 300);
            $table->string('number', 13);
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('Datas');
    }
};