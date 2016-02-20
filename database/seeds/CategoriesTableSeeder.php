<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        $seeds = [
            
        ];
        DB::table('categories')->insert($seeds);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
