<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNewsTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_news', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('header');
            $table->string('title');

            $table
                ->string('slug')
                ->unique()
            ;

            $table->string('category');

            $table->text('short_description');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_news');
    }

}
