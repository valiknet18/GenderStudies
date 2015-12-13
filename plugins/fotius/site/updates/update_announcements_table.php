<?php namespace Fotius\Site\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateAnnouncementsTable extends Migration
{

    public function up()
    {
        Schema::table('fotius_site_announcements', function ($table) {
            $table->datetime('event_date');
        });
    }

    public function down()
    {
        Schema::table('fotius_site_announcements', function (Blueprint $table) {
            $table->dropColumn([
                'event_date'
            ]);
        });
    }

}
