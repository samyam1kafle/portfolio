<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = array(
            array(
                'location_1'=>'Kadaghari, Manohara',
                'location_2'=>'Kapan, Kathmandu',
                'mobile'=>'9815948146',
                'landline'=>'9863629810',
                'primary_email'=>'samyam1kafle@gmail.com',
                'secondary_email'=>'isamyamkafle@gmail.com'


            )
        );

        DB::table('contacts')->insert($contact);
    }
}
