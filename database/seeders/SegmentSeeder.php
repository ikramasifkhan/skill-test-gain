<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('segments')->insert([
            [
                'segment_name' => 'Segment 01'
            ],
            [
                'segment_name' => 'Segment 02'
            ],
            [
                'segment_name' => 'Segment 03'
            ],
            [
                'segment_name' => 'Segment 04'
            ],

        ]);
    }
}
