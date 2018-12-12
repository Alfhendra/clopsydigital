<?php namespace Clopsy\Blogs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateClopsyBlogs extends Migration
{
    public function up()
    {
        Schema::create('clopsy_blogs_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('clopsy_blogs_');
    }
}
