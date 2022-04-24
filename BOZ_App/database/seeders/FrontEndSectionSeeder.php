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
        //Home
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Home']);
        FrontEndSection::factory()->create(['number' => 2, 'page' => 'Home']);
        FrontEndSection::factory()->create(['number' => 3, 'page' => 'Home']);

        //About us
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'About us']);
    }
}
