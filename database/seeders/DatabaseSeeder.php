<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        Story::factory(18)->create();
    }
}
