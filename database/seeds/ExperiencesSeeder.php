<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience = array(
            array(
                'name' => 'developer',
                'worked_for' => 'xyz company',
                'worked_from' => '2010-11-4',
                'worked_to' => '2011-11-20',
                'description' => 'Intro',
                'position' => 'position'


            )
        );

        DB::table('experiences')->insert($experience);
    }
}
