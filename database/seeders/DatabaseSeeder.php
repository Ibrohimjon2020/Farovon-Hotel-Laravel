<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StaffSeeder::class,
            ServiceSeeder::class,
            RoomTypeSeeder::class,
            RoomSeeder::class,
            ClientSeeder::class,
            ClientCommentSeeder::class,
            BookRoomSeeder::class,
        ]);
    }
}
