<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AventureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $element = [
            [
                'id' => 1,
                'ave_name' => "3er Grado - Colegio INCT",
                'ave_code' => "PROF-ABCD",
            ]
        ];
        DB::table('aventures')->insert($element);

    }
}
