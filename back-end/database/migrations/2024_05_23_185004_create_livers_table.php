<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiversTable extends Migration
{
    public function up()
    {
        Schema::create('livers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('pages');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('livers');
    }
}
