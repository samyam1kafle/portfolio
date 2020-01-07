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
                'name' => 'Web Application Developer',
                'worked_for' => 'Next Nepal',
                'worked_from' => '2019-03-20',
                'worked_to' => '2019-11-20',
                'description' => 'i have worked in the relative company for 6 months as a junior web developer where i learnt more things which i can use in the real time project.',
                'position' => 'Junior Laravel Developer'


            ),array(
                'name' => 'Web Application Developer',
                'worked_for' => 'Green Computing Network',
                'worked_from' => '2019-12-18',
                'worked_to' => '2020-01-06',
                'description' => 'Currently working as a web application trainee working with the respective team to make a complete system',
                'position' => 'Intern'


            ), array(
                'name' => 'Call Support Officer',
                'worked_for' => 'WebSurfer PVT.LTD',
                'worked_from' => '2018-04-12',
                'worked_to' => '2019-01-27',
                'description' => 'i have worked in the relative company for 8 months as a call support officer where i learnt more things .',
                'position' => 'Full Time Call Support'


            )

        );

        DB::table('experiences')->insert($experience);
    }
}
