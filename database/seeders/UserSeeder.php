<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        $users = [
            [
                'login'    => 'Sagyndyk2003',
                'email'    => 'sagindik2003@gmail.com',
                'password' => Hash::make('qweasdzxc')
            ],

        ];

        foreach ($users as $user) {
            $user_model = User::create($user);
            $user_model->assignRole('admin');
        }
    }
}
