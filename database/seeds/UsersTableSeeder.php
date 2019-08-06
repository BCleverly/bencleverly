<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email' => 'ben@bencleverly.dev',
            'name' => 'Ben Cleverly',
            'password' => (App::environment('local')) ? bcrypt('secret') : bcrypt(Str::random())
        ]);
    }
}
