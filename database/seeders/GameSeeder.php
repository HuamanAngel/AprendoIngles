<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    public function run()
    {
        $element = [
            [
                'id' => 1,
                'gam_name' => "Cloud",
                'gam_type' => "Completa Frase (Escritura)",

                // 'gam_val1' => "{'option1':['question':'How many apples can you see?','answer':'How'],'option2':['question':'How many apples can you see?','answer':'How'],'option3':['question':'How many apples can you see?','answer':'How']}"
            ]
        ];
        DB::table('games')->insert($element);
    }
}
