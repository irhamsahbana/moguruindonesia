<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class TutorProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $tutorProfiles = [
            [
                'user_id' => 4,
                'id_card' => Str::random(14).'.pdf',
                'last_degree_cert' => Str::random(14).'.pdf',
                'bio' => $faker->text,
                'last_degree_desc' => $faker->text,
                'fee_per_session' => 35_000,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'id_card' => Str::random(14).'.pdf',
                'last_degree_cert' => Str::random(14).'.pdf',
                'bio' => $faker->text,
                'last_degree_desc' => $faker->text,
                'fee_per_session' => 60_000,
                'created_at' => Carbon::now()
            ]

        ];
        DB::table('tutor_profiles')->insert($tutorProfiles);
    }
}
