<?php

use App\Step;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $steps = [
            [
                'id' => 1,
                'name' => 'Firma'
            ],
            [
                'id' => 2,
                'name' => 'Versandgut'
            ],
            [
                'id' => 3,
                'name' => 'Produkt'
            ],
            [
                'id' => 4,
                'name' => 'Technische Anbindung'
            ],
            [
                'id' => 5,
                'name' => 'Zahlung'
            ],
            [
                'id' => 6,
                'name' => 'Absenden'
            ],
            [
                'id' => 7,
                'name' => 'Go-Live'
            ]
        ];

        foreach ($steps as $step) {
            Step::create($step);
        }
    }
}
