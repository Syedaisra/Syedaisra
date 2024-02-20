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
        schema:: create('std_table', function(Blueprint $table){
            $table->id();
            $table->string("std_Name");
            $table->string("std_email");
            $table->string("std_password");
            $table->string("std_Address");
            $table->timestamps();



    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
       Schema::dropIfExists('std_table');
    }
};
