<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBookOrders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('book_orders')->insert([
            'id' => "1",
            'book_id' => "1",
            'orders_id' => "1",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "2",
            'book_id' => "7",
            'orders_id' => "1",
            'qty' => "2",
            'total' => "300",
        ]);
        DB::table('book_orders')->insert([
            'id' => "3",
            'book_id' => "9",
            'orders_id' => "2",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "4",
            'book_id' => "10",
            'orders_id' => "2",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "5",
            'book_id' => "7",
            'orders_id' => "3",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "6",
            'book_id' => "7",
            'orders_id' => "4",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "7",
            'book_id' => "2",
            'orders_id' => "5",
            'qty' => "1",
            'total' => "50",
        ]);
        DB::table('book_orders')->insert([
            'id' => "8",
            'book_id' => "13",
            'orders_id' => "6",
            'qty' => "2",
            'total' => "200",
        ]);
        //16
        DB::table('book_orders')->insert([
            'id' => "9",
            'book_id' => "15",
            'orders_id' => "7",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "10",
            'book_id' => "17",
            'orders_id' => "7",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "11",
            'book_id' => "18",
            'orders_id' => "7",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "12",
            'book_id' => "1",
            'orders_id' => "8",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "13",
            'book_id' => "7",
            'orders_id' => "8",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "14",
            'book_id' => "14",
            'orders_id' => "8",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "15",
            'book_id' => "15",
            'orders_id' => "8",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "16",
            'book_id' => "17",
            'orders_id' => "8",
            'qty' => "1",
            'total' => "90",
        ]);
        //Trasport
        DB::table('book_orders')->insert([
            'id' => "17",
            'book_id' => "1",
            'orders_id' => "9",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "18",
            'book_id' => "7",
            'orders_id' => "9",
            'qty' => "2",
            'total' => "300",
        ]);
        DB::table('book_orders')->insert([
            'id' => "19",
            'book_id' => "9",
            'orders_id' => "10",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "20",
            'book_id' => "10",
            'orders_id' => "10",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "21",
            'book_id' => "7",
            'orders_id' => "11",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "22",
            'book_id' => "7",
            'orders_id' => "12",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "23",
            'book_id' => "2",
            'orders_id' => "13",
            'qty' => "1",
            'total' => "50",
        ]);
        DB::table('book_orders')->insert([
            'id' => "24",
            'book_id' => "13",
            'orders_id' => "14",
            'qty' => "2",
            'total' => "200",
        ]);
        //16
        DB::table('book_orders')->insert([
            'id' => "25",
            'book_id' => "15",
            'orders_id' => "15",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "26",
            'book_id' => "17",
            'orders_id' => "15",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "27",
            'book_id' => "18",
            'orders_id' => "15",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "28",
            'book_id' => "1",
            'orders_id' => "16",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "29",
            'book_id' => "7",
            'orders_id' => "16",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "30",
            'book_id' => "14",
            'orders_id' => "16",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "31",
            'book_id' => "15",
            'orders_id' => "16",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "32",
            'book_id' => "17",
            'orders_id' => "16",
            'qty' => "1",
            'total' => "90",
        ]);
        //Confirm
         //Trasport
         DB::table('book_orders')->insert([
            'id' => "33",
            'book_id' => "1",
            'orders_id' => "17",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "34",
            'book_id' => "7",
            'orders_id' => "17",
            'qty' => "2",
            'total' => "300",
        ]);
        DB::table('book_orders')->insert([
            'id' => "35",
            'book_id' => "9",
            'orders_id' => "18",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "36",
            'book_id' => "10",
            'orders_id' => "18",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "37",
            'book_id' => "7",
            'orders_id' => "19",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "38",
            'book_id' => "7",
            'orders_id' => "20",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "39",
            'book_id' => "2",
            'orders_id' => "21",
            'qty' => "1",
            'total' => "50",
        ]);
        DB::table('book_orders')->insert([
            'id' => "40",
            'book_id' => "13",
            'orders_id' => "22",
            'qty' => "2",
            'total' => "200",
        ]);
        //16
        DB::table('book_orders')->insert([
            'id' => "41",
            'book_id' => "15",
            'orders_id' => "23",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "42",
            'book_id' => "17",
            'orders_id' => "23",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "43",
            'book_id' => "18",
            'orders_id' => "23",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "44",
            'book_id' => "1",
            'orders_id' => "24",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "45",
            'book_id' => "7",
            'orders_id' => "24",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "46",
            'book_id' => "14",
            'orders_id' => "24",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "47",
            'book_id' => "15",
            'orders_id' => "24",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "48",
            'book_id' => "17",
            'orders_id' => "24",
            'qty' => "1",
            'total' => "90",
        ]);
        //Canceled
        DB::table('book_orders')->insert([
            'id' => "49",
            'book_id' => "1",
            'orders_id' => "25",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "50",
            'book_id' => "7",
            'orders_id' => "25",
            'qty' => "2",
            'total' => "300",
        ]);
        DB::table('book_orders')->insert([
            'id' => "51",
            'book_id' => "9",
            'orders_id' => "26",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "52",
            'book_id' => "10",
            'orders_id' => "26",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "53",
            'book_id' => "7",
            'orders_id' => "27",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "54",
            'book_id' => "7",
            'orders_id' => "27",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "55",
            'book_id' => "2",
            'orders_id' => "28",
            'qty' => "1",
            'total' => "50",
        ]);
        DB::table('book_orders')->insert([
            'id' => "56",
            'book_id' => "13",
            'orders_id' => "29",
            'qty' => "2",
            'total' => "200",
        ]);
        //16
        DB::table('book_orders')->insert([
            'id' => "57",
            'book_id' => "15",
            'orders_id' => "30",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "58",
            'book_id' => "17",
            'orders_id' => "30",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "59",
            'book_id' => "18",
            'orders_id' => "30",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "60",
            'book_id' => "1",
            'orders_id' => "31",
            'qty' => "1",
            'total' => "250",
        ]);
        DB::table('book_orders')->insert([
            'id' => "61",
            'book_id' => "7",
            'orders_id' => "31",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "62",
            'book_id' => "14",
            'orders_id' => "31",
            'qty' => "1",
            'total' => "150",
        ]);
        DB::table('book_orders')->insert([
            'id' => "63",
            'book_id' => "15",
            'orders_id' => "31",
            'qty' => "1",
            'total' => "90",
        ]);
        DB::table('book_orders')->insert([
            'id' => "64",
            'book_id' => "17",
            'orders_id' => "31",
            'qty' => "1",
            'total' => "90",
        ]);
    }
}
