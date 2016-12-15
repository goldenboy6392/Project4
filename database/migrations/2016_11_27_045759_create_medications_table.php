<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medications', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('ndc', 10);
            $table->string('type', 15);
            $table->string('brand_name');
            $table->string('generic_name');
            $table->string('dosage_form');
            $table->string('route');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('manufacturer');
            $table->string('active_ingredient');
            $table->string('strength');
            $table->string('unit');
            $table->string('class', 315);
            $table->string('schedule', 11);
            $table->decimal('price', 19);
            $table->string('interactions');
            $table->string('tags');
            $table->string('side_effects');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medications');
    }
}
