<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mf;

class MfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mf::factory()->count(10)->create();
    }
}
