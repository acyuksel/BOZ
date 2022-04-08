<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_media', function (Blueprint $table) {

            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('medium_id')->constrained('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_media', function (Blueprint $table) {
            $table->dropForeign('projects_media_project_id_foreign');
        });
        Schema::dropIfExists('projects_media');
    }
}
