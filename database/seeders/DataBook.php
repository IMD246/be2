<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('Book')->insert([
                'image' => "img-01.jpg",
                'idCategory'=> 1,
                'nameBook' => "Kiếm tiền làm chủ cuộc sống",
                'idAuthor'=> 1,
                'rate' => 5,
                'price' => 250,
                'salePrice' => 220,
                'SoldBooks' => 0,
                'Description' => "sách dạy cách kiếm tiền bằng các phương pháp đời sống thực tiễn có tính giá trị cao",
                'Quantity' => 20,
            ]);
            DB::table('Book')->insert([
                'image' => "img-05.jpg",
                'idCategory'=> 2,
                'nameBook' => "Suc Manh",
                'idAuthor'=> 2,
                'rate' => 3,
                'price' => 100,
                'salePrice' =>88,
                'SoldBooks' => 10,
                'Description' => "cuốn sách này sẽ nói cho bạn biết về bí mật của thế giới",
                'Quantity' => 30,
            ]);
            DB::table('Book')->insert([
                'image' =>"img-02.jpg",
                'idCategory'=> 2,
                'nameBook' => "Bo Sach Khong lang phi tai nguyen",
                'idAuthor'=> 3,
                'rate' => 4,
                'price' => 50,
                'salePrice' => 45,
                'SoldBooks' => 5,
                'Description' => "cuốn sách sẽ nói cho bạn biết về bí mật mối liên kêt của đại dương và con người",
                'Quantity' => 50,
            ]);
            DB::table('Book')->insert([
                'image' => "img-03.jpg",
                'idCategory'=> 3,
                'nameBook' => "Bo sach exploers",
                'idAuthor'=> 1,
                'rate' => 5,
                'price' => 120,
                'salePrice' => 100,
                'SoldBooks' => 3,
                'Description' => "quyển sách kể về cô gái mê trai bỏ làng",
                'Quantity' => 5,
            ]);
            DB::table('Book')->insert([
                'image' => "img-04.jpg",
                'idCategory'=> 1,
                'nameBook' => "ke thua cuoc barry",
                'idAuthor'=> 1,
                'rate' => 3,
                'price' => 140,
                'salePrice' => 120,
                'SoldBooks' => 4,
                'Description' => "sách dạy bạn cách đặt tiêu đề chuẩn thời thế",
                'Quantity' => 10,
                'Feature'=>1,
            ]);

        }

}
