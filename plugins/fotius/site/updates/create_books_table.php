<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_books', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('author');
            $table->text('description');
            $table->date('released_at');
            $table->string('link_to_book');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_books');
    }

}
