<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('short_description');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_articles');
    }

}
