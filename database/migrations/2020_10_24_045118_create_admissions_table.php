<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name_eng');
            $table->string('name_bng');
            $table->date('dob');
            $table->string('nationality');
            $table->string('religion');
            $table->string('father_name_eng');
            $table->string('father_name_bng');
            $table->string('mother_name_eng');
            $table->string('mother_name_bng');
            $table->text('per_add');
            $table->text('mailing_add');
            $table->string('sla');
            $table->string('moi');
            $table->string('last_place');
            $table->string('find_out');
            $table->string('curricular');
            $table->integer('challanged');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->integer('father_nid');
            $table->integer('mother_nid');
            $table->string('father_contact');
            $table->string('mother_contact');
            $table->string('father_fb')->nullable();
            $table->string('mother_fb')->nullable();
            $table->string('transports');
            
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
        Schema::dropIfExists('admissions');
    }
}
