<?php namespace Fotius\Site\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateArticleTagTable extends Migration
{

    public function up()
    {
        Schema::create('fotius_site_article_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table
                ->integer('article_id')
                ->unsigned()
            ;
            $table
                ->integer('tag_id')
                ->unsigned()
            ;

            $table
                ->foreign('article_id')
                ->references('id')
                ->on('fotius_site_articles')
                ->onDelete('CASCADE')
            ;

            $table
                ->foreign('tag_id')
                ->references('id')
                ->on('fotius_site_tags')
                ->onDelete('CASCADE')
            ;

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotius_site_article_tag');
    }

}
