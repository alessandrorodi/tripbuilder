<?php

use Illuminate\Database\Seeder;
use Someline\Models\Foundation\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
//            'slid' => '1',
            'name' => "Alessandro Rodi",
            'email' => 'momentum@momentum.com',
            'password' => bcrypt('momentum'),
            'remember_token' => str_random(10),
            'gender' => 'M',
            'birthday' => '1994-09-18',
            'country' => 'CN',
            'timezone' => 'America/Toronto',
            'locale' => 'en',
            'username' => 'momentum',
            'phone_number' => '+1234567890',
            'status' => 1,
        ]);

        factory(User::class, 1)->create();
    }
}
