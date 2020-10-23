<?php

namespace Database\Seeders;

use App\Models\StatusPropriedade;
use Illuminate\Database\Seeder;

class StatusPropriedadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['nome' => 'Contratado'],
            ['nome' => 'Não Contratado']
        ];

        foreach ($status as $item) {
            StatusPropriedade::create($item);
        }
    }
}
