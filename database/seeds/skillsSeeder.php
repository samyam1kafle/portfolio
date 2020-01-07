<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class skillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = array(
          array(
              'name'=>'Html'
          ),array(
                'name'=>'Css'
            ) ,array(
                'name'=>'Ajax'
            ) ,array(
                'name'=>'JavaScript'
            ) ,array(
                'name'=>'Php'
            ) ,array(
                'name'=>'Laravel'
            ) ,array(
                'name'=>'Git Hub'
            ) ,
        );
        DB::table('skills')->insert($skills);
    }
}
