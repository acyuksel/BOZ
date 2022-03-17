<?php

namespace Database\Seeders;

use App\Models\FrontEndSection;
use Illuminate\Database\Seeder;

class FrontEndSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FrontEndSection::factory()->create(['number' => 1]);
        FrontEndSection::factory()->create(['number' => 2]);
        FrontEndSection::factory()->create(['number' => 3]);
    }
}
