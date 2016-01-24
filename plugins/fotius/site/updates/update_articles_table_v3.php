<?php namespace Fotius\Site\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateArticlesTableV3 extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_articles', function ($table) {
            $table
                ->string('author')
                ->nullable()
            ;
        });
    }

    public function down()
    {
        Schema::table('fotius_site_articles', function (Blueprint $table) {
            $table
                ->dropColumn([
                    'author',
                ])
            ;
        });
    }

}
