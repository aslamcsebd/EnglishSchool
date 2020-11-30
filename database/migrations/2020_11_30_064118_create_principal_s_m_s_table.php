<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalSMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principal_s_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('leftSide');
            $table->longText('rightSide');
            $table->string('teacherName');
            $table->string('signature');
            $table->string('image');
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
        Schema::dropIfExists('principal_s_m_s');
    }
}
