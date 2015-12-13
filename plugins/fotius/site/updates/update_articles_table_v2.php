<?php namespace Fotius\Site\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateArticlesTableV2 extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_articles', function ($table) {
            $table
                ->boolean('active')
                ->default(false)
            ;

            $table
                ->boolean('needKnow')
                ->default(false)
            ;

            $table
                ->boolean('news')
                ->default(false)
            ;
        });
    }

    public function down()
    {
        Schema::table('fotius_site_articles', function (Blueprint $table) {
            $table
                ->dropColumn([
                    'active',
                    'needKnow',
                    'news'
                ])
            ;
        });
    }

}
