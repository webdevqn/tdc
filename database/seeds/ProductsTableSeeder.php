<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        $seeds = [
            
        ];
        DB::table('products')->insert($seeds);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
