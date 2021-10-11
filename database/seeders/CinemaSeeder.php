<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cinema1 = new Cinema();
        $cinema1->name = 'Cinema North Zone';
        $cinema1->price =     17.00;
        $cinema1->save();

        $cinema2 = new Cinema();
        $cinema2->name = 'Cinema South Zone';
        $cinema2->price =      18.00;
        $cinema2->save();

        $cinema3 = new Cinema();
        $cinema3->name = 'Cinema East Zone';
        $cinema3->price =          24.00;
        $cinema3->save();

        $cinema4 = new Cinema();
        $cinema4->name = 'Cinema West Zone';
        $cinema4->price =            21.50;
        $cinema4->save();
    }
}
