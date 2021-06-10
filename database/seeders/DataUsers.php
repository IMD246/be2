<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([
                'id' => "1",
                'name'=> "Nguyễn Hồng Lợi",
                'role' => 0,
                'email'=> 'hongloi12123@gmail.com',
                'email_verified_at' => '2021-05-22 14:52:21',
                'phone' => '0568442815',
                'password' => '123123123',
                'address' => 'Linh trung, Thủ đức',
                'updated_at' => '2021-05-22 14:52:21',
                'created_at' => '2021-05-22 14:52:21',
            ]);
          

        }

}
