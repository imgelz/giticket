<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat Role Admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat Role Member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Membuat Sample Admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gitick.id';
        $admin->password = bcrypt('gitick633');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
