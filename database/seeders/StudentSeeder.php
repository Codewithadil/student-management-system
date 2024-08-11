<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentData = [
            ['id' => 1, 'student_name' => 'Abdul Rahman', 'class_teacher_id' => 2, 'class' => 'Two', 'admission_date' => '2024-01-01', 'yearly_fees' => '2000'],
            ['id' => 2, 'student_name' => 'Ananya Sharma', 'class_teacher_id' => 3, 'class' => 'Three', 'admission_date' => '2024-02-01', 'yearly_fees' => '2500'],
            ['id' => 3, 'student_name' => 'Aarav Patel', 'class_teacher_id' => 4, 'class' => 'Four', 'admission_date' => '2024-03-01', 'yearly_fees' => '3000'],
            ['id' => 4, 'student_name' => 'Ishaan Gupta', 'class_teacher_id' => 5, 'class' => 'Five', 'admission_date' => '2024-04-01', 'yearly_fees' => '3500'],
            ['id' => 5, 'student_name' => 'Kavya Reddy', 'class_teacher_id' => 6, 'class' => 'Six', 'admission_date' => '2024-05-01', 'yearly_fees' => '4000'],
            ['id' => 6, 'student_name' => 'Vivaan Patel', 'class_teacher_id' => 7, 'class' => 'Seven', 'admission_date' => '2024-06-01', 'yearly_fees' => '4500'],
            ['id' => 7, 'student_name' => 'Maya Rao', 'class_teacher_id' => 8, 'class' => 'Eight', 'admission_date' => '2024-07-01', 'yearly_fees' => '5000'],
            ['id' => 8, 'student_name' => 'Siddharth Singh', 'class_teacher_id' => 9, 'class' => 'Nine', 'admission_date' => '2024-08-01', 'yearly_fees' => '5500'],
            ['id' => 9, 'student_name' => 'Aditi Deshmukh', 'class_teacher_id' => 10, 'class' => 'Ten', 'admission_date' => '2024-09-01', 'yearly_fees' => '6000'],
            ['id' => 10, 'student_name' => 'Reyansh Agarwal', 'class_teacher_id' => 1, 'class' => 'Eleven', 'admission_date' => '2024-10-01', 'yearly_fees' => '6500'],
            ['id' => 11, 'student_name' => 'Shivani Sharma', 'class_teacher_id' => 2, 'class' => 'Twelve', 'admission_date' => '2024-11-01', 'yearly_fees' => '7000'],
            ['id' => 12, 'student_name' => 'Rohan Yadav', 'class_teacher_id' => 3, 'class' => 'Two', 'admission_date' => '2024-12-01', 'yearly_fees' => '2000'],
            ['id' => 13, 'student_name' => 'Nisha Sinha', 'class_teacher_id' => 4, 'class' => 'Three', 'admission_date' => '2024-01-15', 'yearly_fees' => '2500'],
            ['id' => 14, 'student_name' => 'Divya Jain', 'class_teacher_id' => 5, 'class' => 'Four', 'admission_date' => '2024-02-15', 'yearly_fees' => '3000'],
            ['id' => 15, 'student_name' => 'Tanuj Patel', 'class_teacher_id' => 6, 'class' => 'Five', 'admission_date' => '2024-03-15', 'yearly_fees' => '3500'],
            ['id' => 16, 'student_name' => 'Aisha Khan', 'class_teacher_id' => 7, 'class' => 'Six', 'admission_date' => '2024-04-15', 'yearly_fees' => '4000'],
            ['id' => 17, 'student_name' => 'Pooja Sharma', 'class_teacher_id' => 8, 'class' => 'Seven', 'admission_date' => '2024-05-15', 'yearly_fees' => '4500'],
            ['id' => 18, 'student_name' => 'Karan Kumar', 'class_teacher_id' => 9, 'class' => 'Eight', 'admission_date' => '2024-06-15', 'yearly_fees' => '5000'],
            ['id' => 19, 'student_name' => 'Madhuri Rao', 'class_teacher_id' => 10, 'class' => 'Nine', 'admission_date' => '2024-07-15', 'yearly_fees' => '5500'],
            ['id' => 20, 'student_name' => 'Rajesh Singh', 'class_teacher_id' => 1, 'class' => 'Ten', 'admission_date' => '2024-08-15', 'yearly_fees' => '6000'],
            ['id' => 21, 'student_name' => 'Sonal Mehta', 'class_teacher_id' => 2, 'class' => 'Eleven', 'admission_date' => '2024-09-15', 'yearly_fees' => '6500'],
            ['id' => 22, 'student_name' => 'Simran Kaur', 'class_teacher_id' => 3, 'class' => 'Twelve', 'admission_date' => '2024-10-15', 'yearly_fees' => '7000'],
            ['id' => 23, 'student_name' => 'Aarav Singh', 'class_teacher_id' => 4, 'class' => 'Two', 'admission_date' => '2024-11-15', 'yearly_fees' => '2000'],
            ['id' => 24, 'student_name' => 'Kriti Kapoor', 'class_teacher_id' => 5, 'class' => 'Three', 'admission_date' => '2024-12-15', 'yearly_fees' => '2500'],
            ['id' => 25, 'student_name' => 'Akash Gupta', 'class_teacher_id' => 6, 'class' => 'Four', 'admission_date' => '2024-01-20', 'yearly_fees' => '3000'],
            ['id' => 26, 'student_name' => 'Nitin Sharma', 'class_teacher_id' => 7, 'class' => 'Five', 'admission_date' => '2024-02-20', 'yearly_fees' => '3500'],
            ['id' => 27, 'student_name' => 'Anaya Patel', 'class_teacher_id' => 8, 'class' => 'Six', 'admission_date' => '2024-03-20', 'yearly_fees' => '4000'],
            ['id' => 28, 'student_name' => 'Shivam Agarwal', 'class_teacher_id' => 9, 'class' => 'Seven', 'admission_date' => '2024-04-20', 'yearly_fees' => '4500'],
            ['id' => 29, 'student_name' => 'Alok Kumar', 'class_teacher_id' => 10, 'class' => 'Eight', 'admission_date' => '2024-05-20', 'yearly_fees' => '5000'],
            ['id' => 30, 'student_name' => 'Kavya Sharma', 'class_teacher_id' => 1, 'class' => 'Nine', 'admission_date' => '2024-06-20', 'yearly_fees' => '5500'],
            ['id' => 31, 'student_name' => 'Jai Patel', 'class_teacher_id' => 2, 'class' => 'Ten', 'admission_date' => '2024-07-20', 'yearly_fees' => '6000'],
            ['id' => 32, 'student_name' => 'Aditi Jain', 'class_teacher_id' => 3, 'class' => 'Eleven', 'admission_date' => '2024-08-20', 'yearly_fees' => '6500'],
            ['id' => 33, 'student_name' => 'Ravi Gupta', 'class_teacher_id' => 4, 'class' => 'Twelve', 'admission_date' => '2024-09-20', 'yearly_fees' => '7000'],
        ];
        foreach($studentData as $data):
        	Student::create($data);
		endforeach;
    }
}
