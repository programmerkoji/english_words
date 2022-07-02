<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            [
                'user_id' => 1,
                'word_en' => 'train',
                'word_ja' => '電車',
                'part_of_speech' => 1,
                'memory' => 1,
                'memo' => 'テストです。',
            ],
            [
                'user_id' => 2,
                'word_en' => 'name',
                'word_ja' => '名前',
                'part_of_speech' => 1,
                'memory' => 2,
                'memo' => 'テストです。テストです。',
            ],
            [
                'user_id' => 2,
                'word_en' => 'time',
                'word_ja' => '時間',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
            ],
            [
                'user_id' => 1,
                'word_en' => 'minutes',
                'word_ja' => '分',
                'part_of_speech' => 1,
                'memory' => 3,
                'memo' => 'テストです。',
            ],

        ]);
    }
}
