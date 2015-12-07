<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBibliographiesTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_bibliographies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('author');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_bibliographies');
    }

}
