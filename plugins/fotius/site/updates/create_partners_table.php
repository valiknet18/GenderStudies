<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePartnersTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_partners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('site');
            $table->string('email');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_partners');
    }

}
