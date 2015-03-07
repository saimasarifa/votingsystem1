<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersAndCandidatesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('voter_name');
			$table->string('createdby');
			$table->string('modifiedby');
			$table->timestamps();
		});
		Schema::create('candidates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('candidate_name');
			$table->string('symbol');
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
		Schema::drop('voters');
		Schema::drop('candidates');
	}

}
