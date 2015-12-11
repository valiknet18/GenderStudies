<?php namespace Fotius\Site\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateNewsTable extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_news', function ($table) {
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
        Schema::table('fotius_site_news', function (Blueprint $table) {
            $table
                ->dropColumn([
                    'active',
                    'needKnow',
                    'news'
                ]);
        });
    }

}
