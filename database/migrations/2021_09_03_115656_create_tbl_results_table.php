<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_results', function (Blueprint $table) {
            $table->bigIncrements('in_result_id'); 
            $table->integer('in_score');
            $table->string('st_ip_address');
            $table->timestamp('dt_created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dt_modified_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_results');
    }
}
