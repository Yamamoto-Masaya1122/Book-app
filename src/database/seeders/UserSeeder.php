<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
              'name' => '山本将哉',
              'email' => 'yamasho@example.com',
              'password' => Hash::make('Murotuyosi1122')
            ],
            [
              'name' => 'member',
              'email' => 'member@example.com',
              'password' => Hash::make('memberpass')
            ],
            [
              'name' => 'creator',
              'email' => 'creator@example.com',
              'password' => Hash::make('creatorpass')
            ]
          ]);
    }
}
