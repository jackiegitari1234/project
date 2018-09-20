<?php

use Illuminate\Database\Seeder;
use App\Models\Courses\Courses;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            [
                'name' => 'BICT',
                'year' => '2015',
                'semester' => 1,
            ],
            [
                'name' => 'BBIT',
                'year' => '2018',
                'semester' => 2,
            ],
            [
                'name' => 'Computer Science',
                'year' => '2011',
                'semester' => 1,
            ]
        ];

        foreach ($course as $course){
            Courses::create($course);
        }
    }
}
