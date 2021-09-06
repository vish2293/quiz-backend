<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_questions', function (Blueprint $table) {
            $table->bigIncrements('in_question_id');
            $table->text('st_question');
            $table->string('st_question_type');
            $table->integer('in_correct_answer');
            $table->timestamp('dt_created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dt_modified_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        DB::table('tbl_questions')->insert(
            [
                [
                    'st_question' => '5 + 5 = 10',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '1'
                ],
                [
                    'st_question' => '12 * 4 != 48',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '0'
                ],
                [
                    'st_question' => '1000/0 = 0',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '0'
                ],
                [
                    'st_question' => '0.00000010 = 1',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '1'
                ],
                [
                    'st_question' => '1 / (( -2 ) -4) = 16',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '1'
                ],
                [
                    'st_question' => 'x = 7 DOES NOT satisfy the inequality x - 7 < 0',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '1'
                ],
                [
                    'st_question' => '30% of x is equal to 0.03x',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '0'
                ],
                [
                    'st_question' => 'The additive inverse of -10 is 10',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '1'
                ],
                [
                    'st_question' => 'x + 2 = 7 is called an inequality',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '0'
                ],
                [
                    'st_question' => 'The absolute value of a real negative number is negative',
                    'st_question_type' => 'radio',
                    'in_correct_answer' => '0'
                ]

            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_questions');
    }
}
