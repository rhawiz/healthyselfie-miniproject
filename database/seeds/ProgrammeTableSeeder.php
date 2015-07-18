<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;


class ProgrammeTableSeeder extends Seeder{

    public function run()
    {

		DB::table('programme')->delete();

		App\Programme::create(array(
			'name' => 'Test Prog 1',
			'price_usd' => 220.0,
			'gender' => 'male',
			'weeks' => 12,
			'training_days' => 5,
			'description' => 'test prog 1'
		));
		
		App\Programme::create(array(
			'name' => 'Test Prog 2',
			'price_usd' => 120.0,
			'gender' => 'female',
			'weeks' => 6,
			'training_days' => 6,
			'description' => 'test prog 2'
		));

    }
}
