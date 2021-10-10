<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DegreesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degrees = [
            ['degree_name' => 'TK', 'created_at' => Carbon::now()],
            ['degree_name' => 'SD', 'created_at' => Carbon::now()],
            ['degree_name' => 'SMP', 'created_at' => Carbon::now()],
            ['degree_name' => 'SMA', 'created_at' => Carbon::now()],
            ['degree_name' => 'Kuliah', 'created_at' => Carbon::now()],
        ];

        DB::table('degrees')->insert($degrees);
    }
}
