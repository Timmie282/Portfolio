<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tim de Kok',
            'email' => 'de.kok.ac@gmail.com',
            'password' => bcrypt('eMsP_wxDp4mQUb1A2V_i')
        ]);
    }
}
