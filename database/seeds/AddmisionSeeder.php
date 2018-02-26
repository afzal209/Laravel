<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddmisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addmisions')->insert([
        	'addmision_fees' => 50000,
        	'class_fee' => 5000000,
        	'security_fees' => 15000,
        ]);
        
    }
}
