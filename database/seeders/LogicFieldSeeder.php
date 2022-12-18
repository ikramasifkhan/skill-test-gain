<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogicFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logic_fields')->insert([
            [
                'field_name'=>'first_name'
            ],
            [
                'field_name'=>'last_name'
            ],
            [
                'field_name'=>'email'
            ],
            [
                'field_name'=>'birth_date'
            ],
            [
                'field_name'=>'created_at'
            ],
        ]);
    }
}
