<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            [
                'first_name' => 'Abc',
                'last_name' => 'Ecec',
                'email' => 'emaila@gmail.com',
                'birth_date' => '1996-08-04',
            ],
            [
                'first_name' => 'XAbc',
                'last_name' => 'Ecdec',
                'email' => 'emaia@gmail.com',
                'birth_date' => '1997-08-04',
            ],
        ]);
    }
}
