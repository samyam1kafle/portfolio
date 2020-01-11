<?php

use Illuminate\Database\Seeder;

class workSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $work = array(
            array(
                'domain'=>'http://www.samyamkafle.com.np/'
            ),array(
                'domain'=>'https://www.linkedin.com/in/samyam-kafle-1b46b9160/'
            ) ,array(
                'domain'=>'https://www.facebook.com/bornride9'
            )
        );
        DB::table('works')->insert($work);
    }

}
