<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStructuresTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_structures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('full_name');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_structures');
    }

}
