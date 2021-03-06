<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'User']
        ])->each(function ($role) {
            Role::create($role);
        });
    }
}
