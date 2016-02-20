<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('messages')->truncate();
        $seeds = [
            
        ];
        DB::table('messages')->insert($seeds);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
