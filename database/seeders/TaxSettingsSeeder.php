<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tax_settings')->insert([
            ['location' => 'Toronto', 'threshold' => 20000000, 'tax_rate' => 7.5, 'rebate' => 8475],
            ['location' => 'Toronto', 'threshold' => 10000000, 'tax_rate' => 6.5, 'rebate' => 8475],
            ['location' => 'Toronto', 'threshold' => 5000000, 'tax_rate' => 5.5, 'rebate' => 8475],
            ['location' => 'Toronto', 'threshold' => 4000000, 'tax_rate' => 4.5, 'rebate' => 8475],
            ['location' => 'Toronto', 'threshold' => 3000000, 'tax_rate' => 3.5, 'rebate' => 8475],
            ['location' => 'Toronto', 'threshold' => 2000000, 'tax_rate' => 0, 'rebate' => 8475],
            ['location' => 'Other', 'threshold' => 2000000, 'tax_rate' => 2.5, 'rebate' => 4000],
            ['location' => 'Other', 'threshold' => 400000, 'tax_rate' => 2.0, 'rebate' => 4000],
            ['location' => 'Other', 'threshold' => 250000, 'tax_rate' => 1.5, 'rebate' => 0],
            ['location' => 'Other', 'threshold' => 55000, 'tax_rate' => 1.0, 'rebate' => 0],
            ['location' => 'Other', 'threshold' => 0, 'tax_rate' => 0.5, 'rebate' => 0],
        ]);
    }
}
