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
            'email' => 'wadoud180@gmail.com',
            'password' => bcrypt(123456789),
            'username' => 'a.biza'
        ]);

        $user = User::create([
            'name' => 'hajar elguennouni',
            'email' => 'hajar.elguennouni@gmail.com',
            'password' => bcrypt(123456789),
            'username' => 'h.elguennouni'
        ]);
    }
}
