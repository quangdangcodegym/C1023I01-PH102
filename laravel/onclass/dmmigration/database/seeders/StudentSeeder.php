<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')
            ->insert(
                [
                    [
                        "name" => "Hoàng Nguyễn",
                        "phone" => "01234567",
                        "classname_id" => 1
                    ],
                    [
                        "name" => "Tài Nguyễn",
                        "phone" => "9999999999",
                        "classname_id" => 2
                    ],
                    [
                        "name" => "Phong Trí",
                        "phone" => "99998888",
                        "classname_id" => 2
                    ]
                ]
            );
    }
}
