<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logics')->insert([
            [
                'logic_name' => 'starts_with',
                'type' => 'text_type'
            ],
            [
                'logic_name' => 'ends_with',
                'type' => 'text_type'
            ],
            [
                'logic_name' => 'before',
                'type' => 'date_type'
            ],

        ]);
    }
}
