<?php

namespace Modules\User\Database\Seeders;
use \Illuminate\Database\Eloquent\Factory;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User as User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        factory(User::class, 20)->create();
        User::reguard();
        //factory(User::class, 50)->create();
        // $this->call("OthersTableSeeder");
    }
}
