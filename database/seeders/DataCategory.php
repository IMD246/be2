<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('Category')->insert([
                'nameCategory' => 'adventure',
            ]);
            DB::table('Category')->insert([
                'nameCategory' => 'study',
            ]);
            DB::table('Category')->insert([
                'nameCategory' => 'programming',
            ]);
            DB::table('Category')->insert([
                'nameCategory' => 'romance',
            ]);
            DB::table('Category')->insert([
                'nameCategory' => 'comedy',
            ]);
    }
}
