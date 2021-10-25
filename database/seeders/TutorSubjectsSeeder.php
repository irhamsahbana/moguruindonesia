<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TutorSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutorSubjects =[
            ['user_id' => 4, 'subject_id' => 1, 'created_at' => Carbon::now()],
            ['user_id' => 4, 'subject_id' => 2, 'created_at' => Carbon::now()],
            ['user_id' => 4, 'subject_id' => 3, 'created_at' => Carbon::now()],

            ['user_id' => 5, 'subject_id' => 4, 'created_at' => Carbon::now()],
            ['user_id' => 5, 'subject_id' => 5, 'created_at' => Carbon::now()],
            ['user_id' => 5, 'subject_id' => 6, 'created_at' => Carbon::now()]
        ];

        DB::table('tutor_subjects')->insert($tutorSubjects);
    }
}
