<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTagsTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table
                ->string('slug')
                ->unique()
            ;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_tags');
    }

}
