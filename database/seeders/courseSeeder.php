<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Seeder;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new course();

        $course->name = 'Laravel';
        $course->desc = 'PHP Framework';
        $course->categories = 'Web Development';

        $course->save();

        $course2 = new course();

        $course2->name = 'Spring';
        $course2->desc = 'Java Framework';
        $course2->categories = 'Desing and Development';

        $course2->save();
    }
}
