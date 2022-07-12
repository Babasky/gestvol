<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passagers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('numpiece');
            $table->string('sexe');
            $table->string('choix_classe');
            $table->string('codevol');
            
            $table->timestamps();
        });
        //Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('passagers',function(Blueprint $table){
            $table->dropConstrainedForeignId('id');

        });*/
        Schema::dropIfExists('passagers');
    }
}
