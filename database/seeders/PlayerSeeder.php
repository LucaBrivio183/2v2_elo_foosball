<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = include(__DIR__ . '\data\players_names.php');

        foreach ($names as $name) {
            Player::create([
                'name' => $name,
                // You can set other attributes here if needed
            ]);
        }
    }
}
