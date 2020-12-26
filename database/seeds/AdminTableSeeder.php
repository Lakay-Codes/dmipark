<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::find(6);
        $admin->email = 'admin@dmipark.com';
        $admin->password = Hash::make('administrator');
        $admin->save();

        $user = User::find(58);
        $user->email = 'mago.umandam@gmail.com';
        $user->password = Hash::make('useruser');
        $user->save();

        $user2 = User::find(64);
        $user2->email = 'mago@lakaykb.com';
        $user2->password = Hash::make('useruser');
        $user2->save();
    }
}
