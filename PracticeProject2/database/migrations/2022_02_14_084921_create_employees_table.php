<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('designation');
            $table->string('salary');
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on(new Expression('practiceproject3.companies')); 
        //    $table->foreign('mobile_id')->references('id')->on('mobiles');
          //  $table->foreign('address_id')->references('id')->on('addresses');
//    $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('employees');
    }
}
