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

        $controller = Role::create([
            'name' => 'Ordonnateur',
            'display_name' => 'System Ordonnateur', // optional
            'description' => 'Ordonnateur profile to handle incomes', // optional
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);


        $controller = Role::create([
            'name' => 'Controller',
            'display_name' => 'System Controller', // optional
            'description' => 'Controller profile to give visa incomes', // optional
        ]);


    }

}
