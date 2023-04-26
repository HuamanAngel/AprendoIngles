<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengerSeeder extends Seeder
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
                'lev_id' => 1,
                'gam_id' => 1,
                'cha_val1' => '[{"option1":{"question":"* many apples can you see?", "answer":"25"}},{"option1":{"question":"* many apples can you see?", "answer":"25"}}]'
            ]
        ];
        DB::table('challenges')->insert($element);

        $element = [
            [
                'id' => 2,
                'lev_id' => 2,
                'gam_id' => 1,
                'cha_val1' => '[{"option1":{"question":"* many apples can you see?", "answer":"25"}},{"option1":{"question":"* many apples can you see?", "answer":"25"}}]'
            ]
        ];
        DB::table('challenges')->insert($element);
        $element = [
            [
                'id' => 3,
                'lev_id' => 3,
                'gam_id' => 1,
                'cha_val1' => '[{"option1":{"question":"* many apples can you see?", "answer":"25"}},{"option1":{"question":"* many apples can you see?", "answer":"25"}}]'
            ]
        ];
        DB::table('challenges')->insert($element);
        $element = [
            [
                'id' => 4,
                'lev_id' => 4,
                'gam_id' => 1,
                'cha_val1' => '[{"option1":{"question":"* many apples can you see?", "answer":"25"}},{"option1":{"question":"* many apples can you see?", "answer":"25"}}]'
            ]
        ];
        DB::table('challenges')->insert($element);
    }
}
