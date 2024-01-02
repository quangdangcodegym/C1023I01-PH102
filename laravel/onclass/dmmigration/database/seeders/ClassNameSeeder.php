<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassNameSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('classname')
            ->insert(
                [
                    [
                        "name" => "C06"
                    ],
                    [
                        "name" => "C07"
                    ],
                ]
            );
    }
}
