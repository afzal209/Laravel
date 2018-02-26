<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'name' => 'Afzal Ahmed',
        	'email' => 'afzal_209@hotmail.com',
        	'password' => bcrypt('afzal123'),
        ]);
    }
}
