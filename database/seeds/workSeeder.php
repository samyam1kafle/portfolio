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
                'domain'=>'www.samyamkafle.com.np'
            ),array(
                'domain'=>'www.dresshack.com.np'
            ) ,array(
                'domain'=>'www.raksisitan.com.np'
            )
        );
        DB::table('works')->insert($work);
    }

}
