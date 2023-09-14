<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $user->name = "user";
        $user->email = "user@gmail.com";
        $user->number  = "8547126464";
        $user->userType = 0;
        $user->password = Hash::make('123456');       
        $user->profile = "user.jpg";
        $user->save();
    }
}
