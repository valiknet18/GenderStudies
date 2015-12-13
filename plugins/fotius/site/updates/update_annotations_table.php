<?php namespace Fotius\Site\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateAnnotationsTable extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_annotations', function($table)
        {
            $table->string('type');
        });
    }

    public function down()
    {
        Schema::table('fotius_site_annotations', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }

}
