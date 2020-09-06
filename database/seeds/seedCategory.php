<?php

use Illuminate\Database\Seeder;

class seedCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
        	['tendanhmuc' => 'Giày cổ lửng'],
        	['tendanhmuc' => 'Giày cổ cao'],
        	['tendanhmuc' => 'Giày cổ thấp'],
        	['tendanhmuc' => 'Giày tây'],
        	['tendanhmuc' => 'Giày lười']
        ]);
    }
}
