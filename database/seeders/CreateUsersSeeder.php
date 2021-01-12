<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'user_id'=>'Staff01',
                'name'=>'Nurul Nabihah',
                'email'=>'nabihah@uniten.com',
                'is_admin'=>'1',
                'password'=> bcrypt('1234'),
            ],
            [
                'user_id'=>'Staff02',
                'name'=>'Siti Noor Syafiqah',
                'email'=>'syafiqah@uniten.com',
                'is_admin'=>'1',
                'password'=> bcrypt('1234'),
            ],
            [
                'user_id'=>'SW0104222',
                'name'=>'Nur Hazwani',
                'email'=>'wani@unitenstud.com',
                'is_admin'=>'0',
                'password'=> bcrypt('1234'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
