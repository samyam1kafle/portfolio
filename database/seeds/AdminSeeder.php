<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = array(
            array(
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('admin123'),
                'role_id'=>'1'
            )
        );

        DB::table('all_users')->insert($admin);
    }
}
