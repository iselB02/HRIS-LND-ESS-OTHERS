<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('training_infos')->insert([
                [
                    'module' => '1',
                    'program' => 'Training 1',
                    'participants' => '5',
                    'startDate' => Carbon::create('2022','07','05'),
                    'endDate' => Carbon::create('2022','11','05')
                ],
                [
                    'module' => '2',
                    'program' => 'Training 2',
                    'participants' => '10',
                    'startDate' => Carbon::create('2022','11','09'),
                    'endDate' => Carbon::create('2022','11','09')
                ],
                [
                    'module' => '3',
                    'program' => 'Training 3',
                    'participants' => '7',
                    'startDate' => Carbon::create('2022','17','11'),
                    'endDate' => Carbon::create('2022','20','11')
                ],
                [
                    'module' => '4',
                    'program' => 'Training 4',
                    'participants' => '10',
                    'startDate' => Carbon::create('2023','02','02'),
                    'endDate' => Carbon::create('2023','10','02')
                ],
                [
                    'module' => '5',
                    'program' => 'Training 5',
                    'participants' => '5',
                    'startDate' => Carbon::create('2022','17','11'),
                    'endDate' => Carbon::create('2022','20','11')
                ]
            ]);
    }
}
