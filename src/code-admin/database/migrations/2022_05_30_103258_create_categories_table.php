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



        
        Schema::create('categories', function (Blueprint $table) {
            $table->increments("id_categorie");
            $table->string('nom_categorie')->nullable();
            $table->string('photo_categorie')->nullable();
            $table->timestamps();
            
        });
        
        
        Schema::create('produits', function (Blueprint $table) {
            $table->increments("id_produit")->nullable();
            $table->string('nom_produit')->nullable();
            $table->string('description_produit')->nullable();
            $table->string('prix_produit')->nullable();
            $table->string('photo_produit')->nullable();
            $table->unsignedInteger("id_categorie")->nullable(); //Unique key
            $table->timestamps();
            $table->foreign('id_categorie')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');
            
        });

      
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
