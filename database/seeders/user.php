<?php

namespace Database\Seeders;

use Brackets\AdminAuth\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Testing\Fluent\Concerns\Has;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->UserCreate();
    }
    public function UserCreate()
    {
        AdminUser::create([
            'first_name'=>'Faisal',
            'last_name'=>'Ahsan',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin1234'),
            'activated'=>1,
        ]);
    }
}
