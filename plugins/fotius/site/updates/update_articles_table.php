<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateArticlesTable extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_articles', function ($table) {
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::table('fotius_site_articles', function ($table) {
            $table->removeColumn('slug');
        });
    }

}
