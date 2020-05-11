<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            'id' => 1,
            'email_recipient' => null,
            'number_ranges' => null,
            'customer_notification' => true,
        ];

        Admin::create($fields);
    }
}
