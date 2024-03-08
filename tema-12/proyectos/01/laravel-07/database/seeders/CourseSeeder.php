<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Añadir varios cursos
        // DB::table('courses')->insert(
        //     [
        //         'course' => '1DAW',
        //         'grade' =>  'Desarrollo Aplicaciones Web'
        //     ]);
        //     DB::table('courses')->insert(
        //     [
        //         'course' => '2DAW',
        //         'grade' =>  'Desarrollo Aplicaciones Web'
        //     ]);
        //     DB::table('courses')->insert(
        //     [
        //         'course' => '1AD',
        //         'grade' =>  'Asistencia de Direccion'
        //     ]);
        //     DB::table('courses')->insert(
        //     [
        //         'course' => '2AD',
        //         'grade' =>  'Asistencia de Direccion'
        //     ]
        // );

        //añadir registros desde factory
        $courses = Course::factory()->count(4)->create();
    }
}
