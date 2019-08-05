<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <100 ; $i++) {
	        DB::table('order')->insert([ 
	        	'name' => str_random(10), 
	        	'order_code' => time()
	        ]);
    	}
    }
}
