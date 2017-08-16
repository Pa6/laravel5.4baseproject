<?php

use App\User;
use Bican\Roles\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
        ]);

        $writer = Role::create(
            [
                'name'  => 'Writer',
                'slug'  =>  'writer'
            ]
        );


        $admin_user = User::where('email', 'admin@publisher.com')->first();
        $admin_user->attachRole($adminRole);

        $writer_user = User::where('email', 'writer@publisher.com')->first();
        $writer_user->attachRole($writer_user);
    }
}
