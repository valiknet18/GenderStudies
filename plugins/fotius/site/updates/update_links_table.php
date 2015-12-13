<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateLinksTable extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_links', function($table) {
            $table
                ->boolean('active')
                ->default(false)
            ;
        });
    }

    public function down()
    {
        Schema::table('fotius_site_links', function () {

        });
    }

}
