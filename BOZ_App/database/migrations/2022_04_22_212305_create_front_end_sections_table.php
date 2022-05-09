<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontEndSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_end_sections', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('header')->nullable();
            $table->longText('content')->nullable();
            $table->foreignId('language_id')->nullable()->constrained('languages');
            $table->string('page');
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
        Schema::dropIfExists('front_end_sections');
    }
}
