<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeminarTrainingModel;

class seminarTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeminarTrainingModel::create([
            'title' => 'Conflict Resolution',
            'type' => 'Training',
            'location' => 'Chicago',
            'start_date' => '2024-06-15',
            'end_date' => '2024-06-17',
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'description' => 'Training on resolving workplace conflicts effectively.',
            'participants' => 'Alice Johnson, Bob Williams',
            'pre_training' => 'http://pretraining.com/conflict',
            'post_training' => 'http://posttraining.com/conflict'
        ]);

        SeminarTrainingModel::create([
            'title' => 'Diversity and Inclusion',
            'type' => 'Seminar',
            'location' => 'New York',
            'start_date' => '2024-07-01',
            'end_date' => '2024-07-02',
            'start_time' => '10:00:00',
            'end_time' => '15:00:00',
            'description' => 'A seminar on promoting diversity and inclusion in the workplace.',
            'participants' => 'Michael Brown, Sarah Davis',
            'pre_training' => 'http://pretraining.com/diversity',
            'post_training' => 'http://posttraining.com/diversity'
        ]);

        SeminarTrainingModel::create([
            'title' => 'HR Compliance and Legal Issues',
            'type' => 'Training',
            'location' => 'San Francisco',
            'start_date' => '2024-08-05',
            'end_date' => '2024-08-07',
            'start_time' => '08:30:00',
            'end_time' => '17:00:00',
            'description' => 'Training on HR compliance and legal issues, including updates on employment law.',
            'participants' => 'Karen White, James Lee',
            'pre_training' => 'http://pretraining.com/compliance',
            'post_training' => 'http://posttraining.com/compliance'
        ]);

        SeminarTrainingModel::create([
            'title' => 'Employee Engagement Strategies',
            'type' => 'Training',
            'location' => 'Los Angeles',
            'start_date' => '2024-09-10',
            'end_date' => '2024-09-11',
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'description' => 'Strategies for increasing employee engagement and satisfaction.',
            'participants' => 'Emily Clark, Daniel Martinez',
            'pre_training' => 'http://pretraining.com/engagement',
            'post_training' => 'http://posttraining.com/engagement'
        ]);

        SeminarTrainingModel::create([
            'title' => 'Performance Management',
            'type' => 'Seminar',
            'location' => 'Boston',
            'start_date' => '2024-10-05',
            'end_date' => '2024-10-06',
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
            'description' => 'Seminar on performance management and employee appraisal techniques.',
            'participants' => 'Olivia Rodriguez, Thomas Harris',
            'pre_training' => 'http://pretraining.com/performance',
            'post_training' => 'http://posttraining.com/performance'
        ]);
    }
}
