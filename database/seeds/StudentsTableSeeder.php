<?php

use Illuminate\Database\Seeder;
use App\Models\Students\Students;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
            [
                'firstname' => 'John',
                'lastname' => 'Ken',
                'age' => 50,
                'dateofbirth' => '2018-01-01',
                'course_id' => 1,
            ],
            [
                'firstname' => 'She',
                'lastname' => 'Her',
                'age' => 40,
                'dateofbirth' => '2018-10-20',
                'course_id' => 2,
            ],
            [
                'firstname' => 'Them',
                'lastname' => 'It',
                'age' => 45,
                'dateofbirth' => '2018-12-30',
                'course_id' => 1,
            ]
        ];

        foreach ($student as $student){
            Students::create($student);
        }
    }
}
