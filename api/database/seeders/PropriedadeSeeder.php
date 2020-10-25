<?php

namespace Database\Seeders;

use App\Models\Propriedade;
use Illuminate\Database\Seeder;

class PropriedadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propriedade::factory()->count(200)->create();
    }
}
