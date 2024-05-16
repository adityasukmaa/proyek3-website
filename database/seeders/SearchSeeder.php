<?php

// database/seeders/SearchSeeder.php
namespace Database\Seeders;

use App\Models\Search;
use Illuminate\Database\Seeder;

class SearchSeeder extends Seeder
{
    public function run()
    {
        Search::factory()->count(10)->create();
    }
}

