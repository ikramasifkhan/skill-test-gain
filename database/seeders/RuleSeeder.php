<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            [
                'logic_field_id'=>1,
                'logic_id'=>1,
                'description'=>'A'
            ],
            [
                'logic_field_id'=>2,
                'logic_id'=>2,
                'description'=>'C'
            ],
        ]);
    }
}
