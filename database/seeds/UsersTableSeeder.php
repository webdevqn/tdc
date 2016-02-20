<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();        
        
        $faker = Faker\Factory::create();
        
        $seeds = [
            [
                'name' => 'Vu',
                'email' => 'admin@mail.com',
                'password' => bcrypt(123456),
                'status' => 'active',
                'role_id' => 1,
                'company' => $faker->company,
                'image' => $faker->imageUrl(),
                'phone1' => $faker->phoneNumber,
                'phone2' => $faker->phoneNumber,
                'address1' => $faker->address,
                'address2' => $faker->address,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ];
        DB::table('users')->insert($seeds);
        for ($i = 0; $i < 28; $i++) {
            DB::table('users')->insert([ //,
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt(123456),
                'status' => $faker->randomElement(['active', 'banned', 'pending']),
                'role_id' => rand(1,3),
                'company' => $faker->company,
                'image' => $faker->imageUrl(),
                'phone1' => $faker->phoneNumber,
                'phone2' => $faker->phoneNumber,
                'address1' => $faker->address,
                'address2' => $faker->address,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
