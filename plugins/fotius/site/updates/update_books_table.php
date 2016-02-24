<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateBooksTable extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_books', function($table)
        {
            $table
                ->string('file_id')
            ;
        });
    }

    public function down()
    {
        Schema::table('fotius_site_books', function ($table)
        {
            $table
                ->dropColumn('file_id')
            ;
        });
    }

}
