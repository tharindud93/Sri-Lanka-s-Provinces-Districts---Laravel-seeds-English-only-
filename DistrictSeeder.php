<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->truncate();

        DB::table('districts')->insert([
            [
                'id' => 1,
                'province_id' => 6,
                'name' => "Ampara",
            ],
            [
                'id' => 2,
                'province_id' => 8,
                'name' => "Anuradhapura",
            ],
            [
                'id' => 3,
                'province_id' => 7,
                'name' => "Badulla",
            ],
            [
                'id' => 4,
                'province_id' => 6,
                'name' => "Batticaloa",
            ],
            [
                'id' => 5,
                'province_id' => 1,
                'name' => "Colombo",
            ],
            [
                'id' => 6,
                'province_id' => 3,
                'name' => "Galle",
            ],
            [
                'id' => 7,
                'province_id' => 1,
                'name' => "Gampaha",
            ],
            [
                'id' => 8,
                'province_id' => 3,
                'name' => "Hambantota",
            ],
            [
                'id' => 9,
                'province_id' => 9,
                'name' => "Jaffna",
            ],
            [
                'id' => 10,
                'province_id' => 1,
                'name' => "Kalutara",
            ],
            [
                'id' => 11,
                'province_id' => 2,
                'name' => "Kandy",
            ],
            [
                'id' => 12,
                'province_id' => 5,
                'name' => "Kegalle",
            ],
            [
                'id' => 13,
                'province_id' => 9,
                'name' => "Kilinochchi",
            ],
            [
                'id' => 14,
                'province_id' => 4,
                'name' => "Kurunegala",
            ],
            [
                'id' => 15,
                'province_id' => 9,
                'name' => "Mannar",
            ],
            [
                'id' => 16,
                'province_id' =>2 ,
                'name' => "Matale",
            ],
            [
                'id' => 17,
                'province_id' => 3,
                'name' => "Matara",
            ],
            [
                'id' => 18,
                'province_id' => 7,
                'name' => "Monaragala",
            ],
            [
                'id' => 19,
                'province_id' => 9,
                'name' => "Mullaitivu",
            ],
            [
                'id' => 20,
                'province_id' => 2,
                'name' => "Nuwara Eliya",
            ],
            [
                'id' => 21,
                'province_id' => 8,
                'name' => "Polonnaruwa",
            ],
            [
                'id' => 22,
                'province_id' => 4,
                'name' => "Puttalam",
            ],
            [
                'id' => 23,
                'province_id' => 5,
                'name' => "Ratnapura",
            ],
            [
                'id' => 24,
                'province_id' => 6,
                'name' => "Trincomalee",
            ],
            [
                'id' => 25,
                'province_id' => 9,
                'name' => "Vavuniya",
            ],

        ]);
    }
}
