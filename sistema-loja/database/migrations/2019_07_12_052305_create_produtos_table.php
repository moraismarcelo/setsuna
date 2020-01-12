<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigobarras')->nullable();
            $table->string('nome');
            $table->string('descricao')->nullable();
	        $table->string('marca')->nullable();
	        $table->string('modelo')->nullable();
	        $table->decimal('quantidade');
            $table->double('valorCusto',8,2);
            $table->double('valorVenda',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
