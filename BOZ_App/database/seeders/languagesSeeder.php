<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class languagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['name' => 'Nederlands', 'code' => 'nl']);
        Language::create(['name' => 'English', 'code' => 'en']);
    }
}
