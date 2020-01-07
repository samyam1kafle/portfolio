<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminSeeder::class);
         $this->call(ContactSeeder::class);
         $this->call(RolesSeeder::class);
         $this->call(ExperiencesSeeder::class);
         $this->call(skillsSeeder::class);
         $this->call(workSeeder::class);
    }
}
