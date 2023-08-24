<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);


        $moderator = Role::create([
            'name' => 'moderator',
            'display_name' => 'Moderator system', // optional
            'description' => 'User is allowed to modearate posts', // optional
        ]);


    }

}
