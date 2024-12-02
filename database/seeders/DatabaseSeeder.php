<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id_user' => 'US0001',
            'name' => 'pice',
            'email' => 'pice@localhost',
            'usertype' => 'customer',
            'phone' => '0888881111',
            'address' => 'maleber utara'
        ]);
    }
}
