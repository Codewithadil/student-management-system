<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherData = [
            ['id' =>1, 'teacher_name' => 'Abdul Rahman'],
            ['id' =>2, 'teacher_name' => 'Rashid Khan'],
            ['id' =>3, 'teacher_name' => 'Vikas Kumar'],
            ['id' =>4, 'teacher_name' => 'Sharukh Khan'],
            ['id' =>5, 'teacher_name' => 'Guudu'],
            ['id' =>6, 'teacher_name' => 'Akib Khan'],
            ['id' =>7, 'teacher_name' => 'Modassir Khan'],
            ['id' =>8, 'teacher_name' => 'Raushan Ali'],
            ['id' =>9, 'teacher_name' => 'Wasim Akram'],
            ['id' =>10, 'teacher_name' => 'Raza Alam']
        ];
        foreach($teacherData as $data):
        	Teacher::create($data);
		endforeach;
    }
}
