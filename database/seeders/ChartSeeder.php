<?php

namespace Database\Seeders;

use App\Models\Chart;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Company A', 'value' => 1048],
            ['name' => 'Company B', 'value' => 735],
            ['name' => 'Company C', 'value' => 580],
            ['name' => 'Company D', 'value' => 484],
            ['name' => 'Company E', 'value' => 300],
        ];

        foreach ($data as $item) {
            Chart::create($item);
        }
    }
}
