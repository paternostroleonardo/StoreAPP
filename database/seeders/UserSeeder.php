<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //default user admin seeder
        DB::table('users')->delete();
        $user1 = User::create([
            'name' => 'evertec',
            'email' => 'admin@evertec.com',
            'email_verified_at' => '2021-10-10 12:09:50',
            'password' => 'evertec123'
        ]);
    }
}
