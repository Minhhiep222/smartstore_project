<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("tbl_customer_users")->insert([
            "username" => "nguyendat72",
             "password" => Hash::make("123"),
              "name" => "dat",
              "email" => "nnguyendat72@gmail.com",
              "phone" => "032481631",
              "sex" => "female",
              "DOB" => "1990-01-01",
              "address" => "Hoang Huu Nam / Thu Duc"
        ]);
    }

}
