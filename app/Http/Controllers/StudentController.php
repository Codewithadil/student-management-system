<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    // Show all students
    public function allStudent(Request $request){
        $search = $request->input('search');
        $students = Student::with('classTeacher')
                            ->when($search, function ($query) use ($search) {
                                $query->where('student_name', 'like', "%{$search}%");
                            })
                            ->orderBy('id', 'desc')
                            ->paginate(10);

        return view('index', compact('students'));
    }

    // show create student form
    public function studentForm(){
        $teachers = Teacher::all();
        return view('add', compact('teachers'));
    }

    // Save Student
    public function create(Request $request){
        try{
            $validator = validator::make($request->all(), [
                'student_name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
                'class_teacher' => 'required|exists:teachers,id',
                'class' => 'required|string',
                'admission_date' => 'required|date',
                'yearly_fees' => ['required', 'numeric', 'min:100', 'regex:/^[1-9]\d*$/'],
            ]);

            if($validator->fails()){
                return redirect()->back()
                       ->withErrors($validator)
                       ->withInput();
            }

            $student = new Student();
            $student->student_name = $request->student_name;
            $student->class_teacher_id = $request->class_teacher;
            $student->class = $request->class;
            $student->admission_date = $request->admission_date;
            $student->yearly_fees = $request->yearly_fees;
            
            if($student->save()){
                return redirect()->route('studentsList')
                               ->with('success', 'Student Successfully Added.');
            }
            else {
                return redirect()->back()
                               ->with('error', 'Somthing Went Wrong.');
            }

            
        }
        catch(\Exception $e){
           return redirect()->back()
                        ->withErrors('Internal error, please try again later.');
        }
    }

    // show single student with id
    public function show(Request $request, $id){
        try{
           $student = Student::find($id);
           $teachers = Teacher::all();
           if($student){
            return view('update', compact('student', 'teachers'));
        }
        else {
            return redirect()->back()
                           ->with('error', 'Somthing Went Wrong.');
        }
        }
        catch(\Exception $e) {
            return redirect()->back()
                               ->withErrors('Internal error, please try again later.');
        }
    }

    // update student 
    public function update(Request $request, $id){
       try{
            $update = Student::findOrFail($id);
            $validator = validator::make($request->all(), [
                'student_name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
                'class_teacher' => 'required|exists:teachers,id',
                'class' => 'required|string',
                'admission_date' => 'required|date',
                'yearly_fees' => ['required', 'numeric', 'min:100', 'regex:/^\d+(\.\d{1,2})?$/'],
            ]);

            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $update->id = $request->id;
            $update->student_name = $request->student_name;
            $update->class_teacher_id = $request->class_teacher;
            $update->class = $request->class;
            $update->admission_date = $request->admission_date;
            $update->yearly_fees = $request->yearly_fees;
            $update->save();
            return redirect()->route('studentsList')
                            ->with('success', 'Student Successfully Updated.');
       }
       catch(\Exception $e){
            return redirect()->back()
                           ->withErrors('Internal error, please try again later.');
       }
    }

    // Update Status
    public function updateStatus(Request $request, $id, $status){
        try{
            if (!in_array($status, [1, 0])) {
                return redirect()->back()->withErrors('Invalid status.');
            }

           $studentStatus = Student::findOrFail($id);
           $studentStatus->status = $status;
           $studentStatus->save();
           return redirect()->route('studentsList')
                         ->with('success', 'Status Updated Successfully.');
        }
        catch(\Exception $e){
            return redirect()->back()
                           ->withErrors('Internal error, please try again later.');
        }
    }

    // delete Student
    public function destroy(string $id){
        try{
            $student = Student::findOrFail($id);
            $student->delete();
            return redirect()->route('studentsList')
                             ->with('success', 'Student deleted successfully.');
        }
        catch(\Exception $e){
            return redirect()->back()
                           ->withErrors('Internal error, please try again later.');
        }
    }
}
