<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' =>'tauseed zaman',
            'email' =>'tauseed@test.com',
            'password' =>bcrypt('tauseed'),
            'role' =>'super admin',
            'is_super_admin' =>true,
            'created_at' =>now(),
        ]);
        $this->call([
            users::class,
            employeeSeeder::class,
            departmentSeeder::class,
            SubscriberSeeder::class,
            ContactSeeder::class,
            billSeeder::class,
            ]);

        // \App\Models\User::factory(10)->create();
    }
}
