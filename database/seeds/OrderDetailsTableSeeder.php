<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('order_details')->truncate();
        $seeds = [
            
        ];
        DB::table('order_details')->insert($seeds);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
