<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            //register with google account (still user/learner, verified)
            [
                'role' => 'customer',
                'first_name' => 'Irham',
                'last_name' => 'Sahbana',
                'google_id' => '104152951677461576339',
                'email' => 'irhamsahbana@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => 'not set',
                'avatar' => 'https://lh3.googleusercontent.com/a-/AOh14GhEW5zARchgmQUXE9h6sGoCurH-NGDXltv1cREkPg=s96-c',
                'phone' => null,
                'slug' => Str::lower('Irham'.'-'.'Sahbana'.'-'.Str::random(9)),
                'created_at' => Carbon::now()
            ],
            //register with email (still user/learner, unverified)
            [
                'role' => 'customer',
                'first_name' => 'Irham',
                'last_name' => 'Sahbana',
                'google_id' => null,
                'email' => 'irhamsahbana0@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'avatar' => null,
                'phone' => '082188449288',
                'slug' => Str::lower('Irham'.'-'.'Sahbana'.'-'.Str::random(9)),
                'created_at' => Carbon::now()
            ],
            //register with email (still user/learner, verified)
            [
                'role' => 'customer',
                'first_name' => 'Moguru',
                'last_name' => 'Indonesia',
                'google_id' => null,
                'email' => 'neomoguruindonesia@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password'),
                'avatar' => null,
                'phone' => null,
                'slug' => Str::lower('Moguru'.'-'.'Indonesia'.'-'.Str::random(9)),
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('users')->insert($users);
    }
}
