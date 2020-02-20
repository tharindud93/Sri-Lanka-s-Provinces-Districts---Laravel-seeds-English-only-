<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();

        DB::table('provinces')->insert([
            [
                'id' => 1,
                'name' => "Western",
            ],
            [
                'id' => 2,
                'name' => "Central",
            ],
            [
                'id' => 3,
                'name' => "Southern",
            ],
            [
                'id' => 4,
                'name' => "North Western",
            ],
            [
                'id' => 5,
                'name' => "Sabaragamuwa",
            ],
            [
                'id' => 6,
                'name' => "Eastern",
            ],
            [
                'id' => 7,
                'name' => "Uva",
            ],
            [
                'id' => 8,
                'name' => "North Central",
            ],
            [
                'id' => 9,
                'name' => "Northern",
            ],

        ]);
    }
}
