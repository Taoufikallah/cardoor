<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Role;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $adminRole = Role::where('name','admin')->first();

        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            /* 'isAdmin'=> 1 */
            'job_title' => 'developper',
        ]);

        $admin->roles()->attach($adminRole);
    }
}
