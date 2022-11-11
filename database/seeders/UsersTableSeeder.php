<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
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
        $whom_to = array();
        $users = User::factory()
            ->has(
                UserCart::factory()
                ->has(
                    Order::factory()
                )
            )
            ->count(10)
            ->create();

        // распределяем подопечных
        $users_count = $users->count();
        $i = 1;
        foreach ($users as $user){
            $find = false;
            while (!$find || ($users_count == $i && ($users_count/2 != ceil($users_count/2)))){
                $tmp_id = User::all()->random()->id;
                if(!in_array($tmp_id, $whom_to) && $tmp_id!=$user->id){
                    $whom_to[] = $tmp_id;
                    $user->whom_to_give = $tmp_id;
                    $user->save();
                    $find = true;
                }
            }
            $i++;
        }
    }
}
