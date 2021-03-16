<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CarAppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
            'make'=>'BMW',
            'model'=>'X5',
            'produced_on'=>'2016-01-22',
        ],
        [
            'make'=>'BMW',
            'model'=>'X2',
            'produced_on'=>'2016-01-22',
        ],
        [
            'make'=>'BMW',
            'model'=>'X3',
            'produced_on'=>'2016-01-22',
        ],
        [
            'make'=>'BMW',
            'model'=>'X1',
            'produced_on'=>'2016-01-22',
        ]
        ]);
    }
}
