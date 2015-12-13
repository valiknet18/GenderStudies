<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLinksTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('link');
            $table->text('description');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_links');
    }

}
