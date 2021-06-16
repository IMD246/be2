<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataOrders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('orders')->insert([
            'id' => "1",
            'user_id' => "1",
            'total' => "550.00",
            'status' => 'pending',
            'updated_at' => '2021-01-22 14:52:21',
            'created_at' => '2021-01-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "2",
            'user_id' => "2",
            'total' => "300.00",
            'status' => 'pending',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "3",
            'user_id' => "3",
            'total' => "150.00",
            'status' => 'pending',
            'updated_at' => '2021-05-21 14:52:21',
            'created_at' => '2021-05-21 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "4",
            'user_id' => "4",
            'total' => "150.00",
            'status' => 'pending',
            'updated_at' => '2021-05-20 14:52:21',
            'created_at' => '2021-05-20 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "5",
            'user_id' => "5",
            'total' => "50.00",
            'status' => 'pending',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "6",
            'user_id' => "6",
            'total' => "200.00",
            'status' => 'pending',
            'updated_at' => '2021-02-22 14:52:21',
            'created_at' => '2021-02-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "7",
            'user_id' => "7",
            'total' => "270.00",
            'status' => 'pending',
            'updated_at' => '2021-05-22 14:52:21',
            'created_at' => '2021-05-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "8",
            'user_id' => "8",
            'total' => "730.00",
            'status' => 'pending',
            'updated_at' => '2021-05-13 14:52:21',
            'created_at' => '2021-05-13 14:52:21',
        ]);
        //Transport

        DB::table('orders')->insert([
            'id' => "9",
            'user_id' => "3",
            'total' => "550.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-04-22 14:52:21',
            'created_at' => '2021-04-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "10",
            'user_id' => "3",
            'total' => "300.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "11",
            'user_id' => "2",
            'total' => "150.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-05-21 14:52:21',
            'created_at' => '2021-05-21 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "12",
            'user_id' => "4",
            'total' => "150.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-05-20 14:52:21',
            'created_at' => '2021-05-20 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "13",
            'user_id' => "6",
            'total' => "50.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "14",
            'user_id' => "6",
            'total' => "200.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-02-22 14:52:21',
            'created_at' => '2021-02-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "15",
            'user_id' => "7",
            'total' => "270.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-05-22 14:52:21',
            'created_at' => '2021-05-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "16",
            'user_id' => "1",
            'total' => "730.00",
            'status' => 'Transpoting',
            'updated_at' => '2021-05-13 14:52:21',
            'created_at' => '2021-05-13 14:52:21',
        ]);
        // Confirm

        DB::table('orders')->insert([
            'id' => "17",
            'user_id' => "6",
            'total' => "550.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-04-22 14:52:21',
            'created_at' => '2021-04-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "18",
            'user_id' => "6",
            'total' => "300.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "19",
            'user_id' => "5",
            'total' => "150.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-05-21 14:52:21',
            'created_at' => '2021-05-21 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "20",
            'user_id' => "5",
            'total' => "150.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-05-20 14:52:21',
            'created_at' => '2021-05-20 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "21",
            'user_id' => "5",
            'total' => "50.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "22",
            'user_id' => "5",
            'total' => "200.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-02-22 14:52:21',
            'created_at' => '2021-02-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "23",
            'user_id' => "7",
            'total' => "270.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-05-22 14:52:21',
            'created_at' => '2021-05-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "24",
            'user_id' => "8",
            'total' => "730.00",
            'status' => 'Confirmed',
            'updated_at' => '2021-05-13 14:52:21',
            'created_at' => '2021-05-13 14:52:21',
        ]);

        //Cancel

        DB::table('orders')->insert([
            'id' => "25",
            'user_id' => "7",
            'total' => "550.00",
            'status' => 'Canceled',
            'updated_at' => '2021-04-22 14:52:21',
            'created_at' => '2021-04-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "26",
            'user_id' => "1",
            'total' => "300.00",
            'status' => 'Canceled',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "27",
            'user_id' => "3",
            'total' => "150.00",
            'status' => 'Canceled',
            'updated_at' => '2021-05-21 14:52:21',
            'created_at' => '2021-05-21 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "28",
            'user_id' => "4",
            'total' => "150.00",
            'status' => 'Canceled',
            'updated_at' => '2021-05-20 14:52:21',
            'created_at' => '2021-05-20 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "29",
            'user_id' => "5",
            'total' => "50.00",
            'status' => 'Canceled',
            'updated_at' => '2021-03-22 14:52:21',
            'created_at' => '2021-03-22 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "30",
            'user_id' => "6",
            'total' => "200.00",
            'status' => 'Canceled',
            'updated_at' => '2021-02-11 14:52:21',
            'created_at' => '2021-02-11 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "31",
            'user_id' => "7",
            'total' => "270.00",
            'status' => 'Canceled',
            'updated_at' => '2021-05-10 14:52:21',
            'created_at' => '2021-05-10 14:52:21',
        ]);
        DB::table('orders')->insert([
            'id' => "32",
            'user_id' => "8",
            'total' => "730.00",
            'status' => 'Canceled',
            'updated_at' => '2021-05-13 14:52:21',
            'created_at' => '2021-05-13 14:52:21',
        ]);
        //seeder auto
        $limit = 500;
        $fake  = Faker::create();
        $count =0 ;
        for ($i = 1; $i < $limit; $i++) {
            $count++;
            DB::table('orders')->insert([
               
                'user_id' => $count+1,
                'total' => "690.00",
                'status' => 'pending',
                'updated_at' =>  $fake->date("Y-m-d H:i:s"),
                'created_at' =>  $fake->date("Y-m-d H:i:s"),
            ]);
        }
    }
}
