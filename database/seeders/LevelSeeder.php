<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
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
                'ave_id' => 1,
                'lev_name' => "Semana 1 - Verbo To Be",
            ]
        ];
        DB::table('levels')->insert($element);

        $element = [
            [
                'id' => 2,
                'ave_id' => 1,
                'lev_name' => "Semana 2 - Cosas y Frutas",
            ]
        ];
        DB::table('levels')->insert($element);
        $element = [
            [
                'id' => 3,
                'ave_id' => 1,
                'lev_name' => "Semana 3 - Pronombres",
            ]
        ];
        DB::table('levels')->insert($element);
        $element = [
            [
                'id' => 4,
                'ave_id' => 1,
                'lev_name' => "Semana 4 - Adjetivos",
            ]
        ];
        DB::table('levels')->insert($element);

    }
}
