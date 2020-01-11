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
          )
        );
        DB::table('skills')->insert($skills);
    }
}
