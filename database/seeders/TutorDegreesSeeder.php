<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TutorDegreesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutorDegrees = [
            ['user_id' => 4, 'degree_id' => 1, 'created_at' => Carbon::now()],
            ['user_id' => 4, 'degree_id' => 2, 'created_at' => Carbon::now()],
            ['user_id' => 4, 'degree_id' => 3, 'created_at' => Carbon::now()],

            ['user_id' => 5, 'degree_id' => 3, 'created_at' => Carbon::now()],
            ['user_id' => 5, 'degree_id' => 4, 'created_at' => Carbon::now()],
            ['user_id' => 5, 'degree_id' => 5, 'created_at' => Carbon::now()]
        ];

        DB::table('tutor_degrees')->insert($tutorDegrees);
    }
}
