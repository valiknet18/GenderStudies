<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSocialsTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_socials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_socials');
    }

}
