<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'abdelwadoud biza',
            'unity_id' => 1,
            'email' => 'wadoud180@gmail.com',
            'password' => bcrypt(123456789),
            'username' => 'a.biza'
        ]);
        $user->attachRole('Controller');

        $user = User::create([
            'name' => 'hajar elguennouni',
            'unity_id' => 1,
            'email' => 'hajar.elguennouni@gmail.com',
            'password' => bcrypt(123456789),
            'username' => 'h.elguennouni'
        ]);
        $user->attachRole('Controller');

        $user = User::create([
            'name' => 'admin system',
            'unity_id' => 1,
            'email' => 'admin.system@gmail.com',
            'password' => bcrypt(123456789),
            'username' => 'a.mhai'
        ]);
        $user->attachRole('admin');
    }
}
