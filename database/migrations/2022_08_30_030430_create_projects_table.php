<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->text('project_title')->nullable();
            $table->text('project_location')->nullable();
            $table->text('project_area')->nullable();
            $table->text('finished_date')->nullable();
            $table->text('description')->nullable();
            $table->text('main_photo')->nullable();
            $table->text('project_gallery')->nullable();
            $table->text('project_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
