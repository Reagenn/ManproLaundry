<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Administrator',
                'email' => 'ajenglaundry@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/admin.jpg',
                'level' => 1
            ],
            [
                'name' => 'Kasir 1',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/admin.jpg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
