<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sss_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->float('range_of_compensation_from',10,2);
            $table->float('range_of_compensation_to',10,2);
            $table->decimal('salary_credit',8,2);
            $table->decimal('employer_share',8,2);
            $table->decimal('employee_share',8,2);
            $table->float('social_security_total',10,2);
            $table->decimal('employer_ec_share',8,2);
            $table->float('employer_share_total',10,2);
            $table->float('employee_share_total',10,2);
            $table->float('total_contributions',10,2);
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
        Schema::drop('s_s_s');
    }
}
