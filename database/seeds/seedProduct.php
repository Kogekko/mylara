<?php

use Illuminate\Database\Seeder;

class seedProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
        	['category_id' => 1,'tensanpham' => 'Giày đế rộng','motangan' => 'Giày đế rộng làm bằng da thuộc.','motadai' => 'Giày đế rộngiày đế rộngiày đế rộngiày đế rộngiày đế rộng','hinhanh' => 'abc.jpg','nhanhieu' => 'Kevin Cain'],
        	['category_id' => 2,'tensanpham' => 'Giày đế mỏng','motangan' => 'Giày đế mỏng làm bằng da cá sấu.','motadai' => 'Giày đế mỏngGiày đế mỏngGiày đế mỏngGiày đế mỏngGiày đế mỏngGiày đế mỏng','hinhanh' => 'def.jpg','nhanhieu' => 'ISO 9002']
        ]);
    }
}
