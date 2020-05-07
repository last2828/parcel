<?php

use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filds = [
            //first group fields
            [
                'id' => 1,
                'name' =>  'firma',
                'full_name' => 'Firma *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 2,
                'name' =>  'str',
                'full_name' => 'Straße, Nr. *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 3,
                'name' =>  'plz',
                'full_name' => 'PLZ, Ort *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 4,
                'name' =>  'land',
                'full_name' => 'Land *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 5,
                'name' =>  'ges',
                'full_name' => 'Geschäftsführer *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],
            [
                'id' => 6,
                'name' =>  'ust_id',
                'full_name' => 'Ust.-ID Nr. *',
                'type' => 'text',
                'required' => true,
                'group_id' => 1
            ],

            //second group fields
            [
                'id' => 7,
                'name' =>  'tel',
                'full_name' => 'Telefon *',
                'type' => 'text',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 8,
                'name' =>  'mob',
                'full_name' => 'Mobil',
                'type' => 'text',
                'required' => false,
                'group_id' => 2
            ],
            [
                'id' => 9,
                'name' =>  'email',
                'full_name' => 'E-Mail *',
                'type' => 'email',
                'required' => true,
                'group_id' => 2
            ],
            [
                'id' => 10,
                'name' =>  'website',
                'full_name' => 'Website',
                'type' => 'text',
                'required' => false,
                'group_id' => 2
            ],

            //third group fields
            [
                'id' => 11,
                'name' =>  'vers',
                'full_name' => 'Versandgut *',
                'type' => 'text',
                'required' => true,
                'group_id' => 3
            ],
            [
                'id' => 12,
                'name' =>  'waren',
                'full_name' => 'Ø Warenwert *',
                'type' => 'number',
                'required' => true,
                'group_id' => 3
            ],

            //fourth group fields
            [
                'id' => 13,
                'name' =>  'genplante-1',
                'full_name' => 'LETTER (national) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],
            [
                'id' => 14,
                'name' =>  'genplante-2',
                'full_name' => 'LETTER (international) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],
            [
                'id' => 15,
                'name' =>  'genplante-3',
                'full_name' => 'PARCEL (international) in Stück',
                'type' => 'number',
                'required' => false,
                'group_id' => 4
            ],

            //fifth group fields
            [
                'id' => 16,
                'name' =>  '',
                'full_name' => '',
                'type' => '',
                'required' => ,
                'group_id' => 5
            ],

        ];
    }
}
