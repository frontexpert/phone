<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        // User::create(['email'=>'admin@mail.ru', 'password'=>bcrypt('asdfghjkl')]);
        // User::create(['email'=>'alexandr@mail.ru', 'password'=>bcrypt('asdfghjkl')]);
        User::create(['uname'=>'Kop', 'email'=>'admin@mail.ru', 'password'=>'asdfghjkl', 'role'=>'admin']);
        User::create(['uname'=>'Alex', 'email'=>'alexandr@mail.ru', 'password'=>'asdfghjkl', 'role'=>'admin']);
    }
}
