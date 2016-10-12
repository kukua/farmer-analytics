<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
	public function run ()
	{
		Model::unsetEventDispatcher();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		$this->call(UserTableSeeder::class);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
