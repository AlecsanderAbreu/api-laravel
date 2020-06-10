<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'name' => 'Desenvolvedor',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1q2w3e4r5t'),
        ]);
    }
}
