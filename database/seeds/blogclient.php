<?php

use Illuminate\Database\Seeder;

class blogclient extends Seeder
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
            'name' => 'apple',
            'password' => 123456,
            'phone' => 123456,
            'mail' => 'apple@mail.com',
            'gender' => 'female',
        ];
        DB::table('blogclient')->insert($data);
    }
}
