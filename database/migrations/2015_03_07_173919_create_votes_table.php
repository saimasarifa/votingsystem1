<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('voter_id')->unsigned();
			$table->foreign('voter_id')->references('id')->on('voters')->onDelete('cascade');
			$table->integer('candidate_id')->unsigned();
			$table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
			$table->string('symbol1');
			$table->foreign('symbol1')->references('symbol')->on('candidates')->onDelete('cascade');
			$table->string('createdby');
			$table->string('modifiedby');
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
		Schema::drop('votes');
	}

}
