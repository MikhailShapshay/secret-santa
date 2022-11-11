<?php

namespace Database\Seeders;

use App\Models\UserCart;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()
            ->has(UserCart::factory())
            ->count(10)
            ->create();
    }
}
