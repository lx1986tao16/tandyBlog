<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory(Admin::class)->times(1)->make();
        Admin::insert($admin->makeVisible('password')->toArray());

        $admin = Admin::find(1);
        $admin->name = "Tandy";
        $admin->email = "lx1986tao16@gmail.com";
        $admin->password = bcrypt('thx131130xuan');
        $admin->save();
    }
}
