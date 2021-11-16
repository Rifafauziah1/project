<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //membuat role admin
         $adminRole = new Role();
         $adminRole->name = "admin";
         $adminRole->display_name = "Admin Larapus";
         $adminRole->save();

        //membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member Larapus";
        $memberRole->save();

         //membuat sample admin
         $userAdmin = new User;
         $userAdmin->name = "Admin Larapus";
         $userAdmin->email = "adminlarapus@gmail.com";
         $userAdmin->password = bcrypt("rahasia");
         $userAdmin->save();
         $userAdmin->attachRole($adminRole);

        //membuat sample member
        $userMember = new User;
        $userMember->name = "Member Larapus";
        $userMember->email = "member@gmail.com";
        $userMember->password = bcrypt("rahasia");
        $userMember->save();
        $userMember->attachRole($memberRole);
    }
}
