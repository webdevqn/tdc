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
        
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 28; $i++) {
            DB::table('messages')->insert([
                'sender' => rand(1,30),
                'receiver' => rand(1,30),
                'title' => $faker->name,
                'content' => $faker->text(),
                'attachment' => '[]',
                'status' => $faker->randomElement(['read', 'unread']),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);
        }
        
        $seeds = [
            
        ];
        DB::table('messages')->insert($seeds);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
