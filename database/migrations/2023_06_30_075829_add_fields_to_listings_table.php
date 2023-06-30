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
        Schema::table('listings', function (Blueprint $table) {
            //
            $table->unsignedTinyInteger('beds');
            $table->unsignedTinyInteger('baths');
            $table->unsignedTinyInteger('area');

            $table->TinyText('city');
            $table->TinyText('code');
            $table->TinyText('street');
            $table->TinyText('street_nr');

            $table->unsignedInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('listings', function (Blueprint $table) {
        //     //

            
        // });

        Schema::dropColumns('listings', [
            'beds', 'baths', 'area', 'city','code','street','street_nr','price'
        ]);
    }
};
