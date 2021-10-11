<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->username = 'Alan12';
        $user->email = 'alan199912@gmail.com';
        $user->password =  bcrypt('Admin123');
        $user->role_id =  1;
        $user->save();
    }
}
