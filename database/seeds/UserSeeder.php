<?php

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
        $user_list = [
            [
                'id' => 1,
                'lname' => 'James',
                'fname' => 'Bond',
                'address' => 'UK',
                'phone' => '09245125',
                'email' => 'James@email.com',
                'password' => bcrypt('James')
            ],
            [
                'id' => 2,
                'lname' => 'Naruto',
                'fname' => 'Mouse',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Naruto@email.com',
                'password' => bcrypt('Naruto')
            ],
            [
                'id' => 3,
                'lname' => 'Luffy',
                'fname' => 'Mitty',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Luffy@email.com',
                'password' => bcrypt('Luffy')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
