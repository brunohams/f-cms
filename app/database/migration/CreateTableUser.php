<?php
	use Illuminate\Database\Capsule\Manager as Capsule;

	class CreateTableUser
	{

		public function run()
		{

			Capsule::schema()->dropIfExists('user');

			Capsule::schema()->create('user', function($table)
			{

				$table->increments('id');

				$table->string('name');

				$table->string('password');

				$table->timestamps();

			});
		}

	}