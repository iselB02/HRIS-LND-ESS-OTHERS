<?php

namespace Database\Seeders;

use App\Models\ScholarshipModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class Scholarship_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
           ScholarshipModel::create([
                'officedepartment' => $faker->company,
                'last_name' => $faker->lastName,
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'type' => $faker->randomElement(['Permanent', 'Temporary']),
                'address' => $faker->address,
                'postal_code' => $faker->postcode,
                'civil_status' => $faker->randomElement(['Single', 'Married', 'Divorced']),
                'position' => $faker->jobTitle,
                'course' => $faker->word,
                'term' => $faker->randomElement(['Fall', 'Spring', 'Summer']),
                'units' => $faker->numberBetween(1, 12),
                'start_date' => $faker->date,
                'end_date' => $faker->date,
                'school_name' => $faker->company,
                'school_address' => $faker->address,
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'remarks' => $faker->sentence,
            ]);
        }
    }
}
