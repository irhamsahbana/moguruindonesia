<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            ['subject_name' => 'IPA', 'created_at' => Carbon::now()],
            ['subject_name' => 'IPS', 'created_at' => Carbon::now()],
            ['subject_name' => 'Bahasa Indonesia', 'created_at' => Carbon::now()],
            ['subject_name' => 'Bahasa Inggris', 'created_at' => Carbon::now()],
            ['subject_name' => 'Matematika', 'created_at' => Carbon::now()],
            ['subject_name' => 'Biologi', 'created_at' => Carbon::now()],
            ['subject_name' => 'Kimia', 'created_at' => Carbon::now()],
        ];

        DB::table('subjects')->insert($subjects);
    }
}
