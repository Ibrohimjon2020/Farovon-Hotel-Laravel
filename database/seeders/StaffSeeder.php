<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staffs = [
            [
                'firstname' => "Isroiljon",
                'lastname' => "Abdulazizov",
                'phone' => "+998905840073",
            ],
            [
                'firstname' => "Muhammadaziz",
                'lastname' => "Abdulazizov",
                'phone' => "+998902737733",
            ],
            [
                'firstname' => "Xojimuhammad",
                'lastname' => "Bakirov",
                'phone' => "+998906789797",
            ],
            [
                'firstname' => "Muhammadsodiq",
                'lastname' => "Xolimirzayev",
                'phone' => "+998939843111",
            ],
        ];

        foreach ($staffs as $staff) {
            DB::table('staffs')->insert($staff);
        }
    }
}
