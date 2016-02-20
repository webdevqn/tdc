<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        $seeds = [
            ['name' => 'Admin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Mod', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'User', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ];
        DB::table('roles')->insert($seeds);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
