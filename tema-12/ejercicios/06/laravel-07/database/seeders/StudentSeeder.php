<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('students')->insert(
        //     [
        //         [
        //             'name' => 'John',
        //             'lastname' => 'Doe',
        //             'birth_date' => '2000/12/12',
        //             'phone' => '653423424',
        //             'city' => 'Central City',
        //             'dni' => '22336977F',
        //             'email' => 'aweladimetu@gmail.com',
        //             'course_id' => 1
        //         ],
        //     ]
        // );
        $student = Student::factory()->count(100)->create();
    }
}
