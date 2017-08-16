<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->delete();
        $admin = User::create(['email' => 'admin@publisher.com' ,
            'name' => 'admin user',
            'password' => Hash::make('admin?!#'),
            'status' => 1
        ]);

        $writer = User::create([
            'name' => 'writer user',
            'email' => 'writer@publisher.com',
            'password' => Hash::make('writer?!#'),
            'status' => 1
        ]);
    }
}
