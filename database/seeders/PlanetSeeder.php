<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        [
            'jname'=> '水星',
            'ename'=>'MERCURY',
            'radius'=> 2439,
            'weight'=> 3310,
        ],
        [
            'jname'=> '金星',
            'ename'=>'VENUS',
            'radius'=> 6052	,
            'weight'=> 48700,
        ],
        [
            'jname'=> '地球',
            'ename'=>'EARTH',
            'radius'=> 6378,
            'weight'=>59760,
        ],
        [
            'jname'=> '火星',
            'ename'=>'MARS',
            'radius'=> 3397,
            'weight'=> 6420,
        ],
        [
            'jname'=> '木星',
            'ename'=>'JUPITER',
            'radius'=> 71492,
            'weight'=> 18993500,
        ],
        [
            'jname'=> '土星',
            'ename'=>'SATURN',
            'radius'=> 60268,
            'weight'=> 5685980,
        ],
        [
            'jname'=> '天王星',
            'ename'=>'URANUS',
            'radius'=> 25559,
            'weight'=> 868910,
        ],
            [
                'jname'=> '海王星',
                'ename'=>'NEPTUNE',
                'radius'=> 24764,
                'weight'=> 1029660,
            ],
    ];
        DB::table('planets')->insert($param);
    }
}
