<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'title'=>'bantu korban banjir',
            'description'=>'Donasi untuk korban banjir',
            'target_donation'=> 10000000,
            'collected_donation'=> 25000000,
            'deadline'=> '2026-12-31'
        ]);

        Campaign::create([
            'title'=>'Beasiswa Anak Yatim',
            'description'=>'Pendidikan untuk anak Yatim',
            'target_donation'=> 20000000,
            'collected_donation'=> 50000000,
            'deadline'=> '2026-12-30'
        ]);
    }
}