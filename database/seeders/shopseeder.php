<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class shopseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("shops")->insert([

            [
                "owner_id"=>1,
                "name" => "ここに店名前が入ります",
                "information" => "ここに店の情報が入ります",
                "filename" =>"",
                "is_selling" =>true,
            ],
            [
                "owner_id"=>2,
                "name" => "ここに店名入ります",
                "information" => "ここに店の情報が入ります",
                "filename" =>"",
                "is_selling" =>true,
            ]
        ]);
    }
}
