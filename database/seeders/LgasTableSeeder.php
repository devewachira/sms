<?php
namespace Database\Seeders;

use App\Models\Lga;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('lgas')->delete();

        // Treat LGAs as Kenyan subcounties mapped to counties (states)
        $subcounties = [
            // Nairobi
            ['state' => 'Nairobi', 'name' => 'Westlands'],
            ['state' => 'Nairobi', 'name' => 'Dagoretti North'],
            ['state' => 'Nairobi', 'name' => 'Langata'],
            ['state' => 'Nairobi', 'name' => 'Embakasi East'],
            ['state' => 'Nairobi', 'name' => 'Kasarani'],

            // Kiambu
            ['state' => 'Kiambu', 'name' => 'Thika Town'],
            ['state' => 'Kiambu', 'name' => 'Ruiru'],
            ['state' => 'Kiambu', 'name' => 'Gatundu South'],
            ['state' => 'Kiambu', 'name' => 'Juja'],

            // Machakos
            ['state' => 'Machakos', 'name' => 'Machakos Town'],
            ['state' => 'Machakos', 'name' => 'Mavoko'],
            ['state' => 'Machakos', 'name' => 'Kathiani'],

            // Nakuru
            ['state' => 'Nakuru', 'name' => 'Nakuru Town East'],
            ['state' => 'Nakuru', 'name' => 'Nakuru Town West'],
            ['state' => 'Nakuru', 'name' => 'Naivasha'],

            // Kisumu
            ['state' => 'Kisumu', 'name' => 'Kisumu Central'],
            ['state' => 'Kisumu', 'name' => 'Kisumu East'],
            ['state' => 'Kisumu', 'name' => 'Kisumu West'],
        ];

        $stateMap = State::pluck('id', 'name');

        foreach ($subcounties as $sc) {
            if (!isset($stateMap[$sc['state']])) {
                continue; // skip if county not defined in states table
            }

            Lga::create([
                'state_id' => $stateMap[$sc['state']],
                'name'     => $sc['name'],
            ]);
        }
    }
}
