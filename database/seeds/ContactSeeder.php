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
                'location_1'=>'XXX, Kathmandu',
                'location_2'=>'YYY, Kathmandu',
                'mobile'=>'1234567897',
                'landline'=>'9876543210',
                'primary_email'=>'admin@gmail.com',
                'secondary_email'=>'secondaryadmin@gmail.com'


            )
        );

        DB::table('contacts')->insert($contact);
    }
}
