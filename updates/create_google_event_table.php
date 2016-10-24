<?php namespace Indikator\Tracking\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateGoogleEventTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_tracking_google_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('category', 100);
            $table->string('action', 100);
            $table->string('label', 100)->nullable();
            $table->string('value', 8)->nullable();
            $table->string('auto_category', 1)->nullable();
            $table->string('auto_label', 1)->nullable();
            $table->string('common', 500)->nullable();
            $table->string('status', 1)->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_tracking_google_event');
    }
}
