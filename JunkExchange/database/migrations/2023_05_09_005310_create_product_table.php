<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->foreignId('userTarget_id')->constrained('users', 'id');
            $table->string('status')->nullable();
            $table->string('name');
            $table->string('weight');
            $table->string('category')->nullable();
            $table->string('description');
            $table->string('number', 13);
            $table->string('photo', 300);
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('Product');
    }
};