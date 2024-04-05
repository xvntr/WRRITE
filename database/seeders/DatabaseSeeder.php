<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Story;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::factory(5)->create();
        Story::factory(10)->create();
    }
}
