<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reviews')->insert([
			'id' => 1,
			'role_type' => buyer,

		]);

        DB::table('reviews')->insert([
			'id' => 2,
			'role_type' => seller,
			
		]);
    }
}
