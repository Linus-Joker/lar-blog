<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id' => 1,
            'name' => 'milk',
            'password' => 654321,
            'mail' => 'milk@mail.com',

        ];
        DB::table('users')->insert($data);
    }
}
