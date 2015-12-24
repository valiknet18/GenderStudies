<?php namespace Fotius\Site\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateAnnotationsTable2 extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_annotations', function($table)
        {
            $table->boolean('use_icon');
            $table->string('icon');
        });
    }

    public function down()
    {
        Schema::table('fotius_site_annotations', function (Blueprint $table) {
            $table->dropColumn([
              'use_icon',
              'icon'
            ]);
        });
    }

}
