<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomType;
class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room_types = [
            [
                "name" => [
                    "en" => "Standard",
                    "ru" => "Стандарт",
                    "uz" => "Standart",
                ],
                "number_of_beds" => 4,
            ],
            [
                "name" => [
                    "en" => "Standard +",
                    "ru" => "Стандарт +",
                    "uz" => "Standart +",
                ],
                "number_of_beds" => 3,
            ],
            [
            "name" => [
                "en" => "Comfort",
                "ru" => "Комфорт",
                "uz" => "Komfort",
            ],
            "number_of_beds" => 2,
            ]
        ];

        foreach ($room_types as $room_type) {
            RoomType::create($room_type);
        }
    }
}
