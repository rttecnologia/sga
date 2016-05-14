<?php

use Illuminate\Database\Seeder;

class PermissionsRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            'permission_id' => '1',
            'role_id' => '1',
            'granted' => '1', // optional
        ]);
    }
}
