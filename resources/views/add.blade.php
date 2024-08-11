@extends('layouts.master')

@section('content')
{{-- <h2 class="mb-4">Add Student</h2> --}}
<div class="heading">
    <h2 class="mb-4 mt-4">Add Student</h2>
    <a href="{{ route('studentsList') }}" class="text-white right-btn"><button class="btn btn-primary ">List Student</button></a>
</div>

<form method="post" action="{{ route('add-student') }}">
      @csrf
    <div class="mb-3 row">
        <div class="col-sm-6">
        <label for="studentName" class="col-sm-3 col-form-label">Student Name <span class="text-danger ml-2">*</span></label>
            <input type="text" class="form-control" name="student_name" id="student_name" value="{{old('student_name')}}" placeholder="Enter student name">
            @if ($errors->has('student_name'))
            <div class="text-danger">{{ $errors->first('student_name') }}</div>
            @endif
        </div>
        
        <div class="col-sm-6">
        <label for="classTeacherId" class="col-sm-3 col-form-label">Class Teacher <span class="text-danger ml-2">*</span></label>
            <select class="form-control form-select" name="class_teacher" id="class_teacher">
                <option>--Select Teacher--</option>
                @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}" {{ old('class_teacher') == $teacher->id ? 'selected' : '' }}>{{$teacher->teacher_name}}</option>
                @endforeach
            </select>
            @if ($errors->has('class_teacher'))
            <div class="text-danger">{{ $errors->first('class_teacher') }}</div>
            @endif
        </div>
    </div>
    
    <div class="mb-3 row">
        
        <div class="col-sm-6">
        <label for="class" class="col-sm-3 col-form-label">Class <span class="text-danger ml-2">*</span></label>
            <input type="text" class="form-control" name="class" id="class" value="{{old('class')}}" placeholder="Enter class">
            @if ($errors->has('class'))
            <div class="text-danger">{{ $errors->first('class') }}</div>
            @endif
        </div>

        <div class="col-sm-6">
        <label for="admissionDate" class="col-sm-3 col-form-label">Admission Date <span class="text-danger ml-2">*</span></label>
            <input type="date" name="admission_date" class="form-control" id="admission_date" value="{{old('admission_date')}}">
            @if ($errors->has('admission_date'))
            <div class="text-danger">{{ $errors->first('admission_date') }}</div>
            @endif
        </div>
    </div>
    
    <div class="mb-3 row">
        <div class="col-sm-12">
        <label for="yearlyFees" class="col-sm-3 col-form-label">Yearly Fees <span class="text-danger ml-2">*</span></label>
            <input type="number" class="form-control" name="yearly_fees" id="yearly_fees" value="{{old('yearly_fees')}}" placeholder="Enter yearly fees">
            @if ($errors->has('yearly_fees'))
            <div class="text-danger">{{ $errors->first('yearly_fees') }}</div>
            @endif
        </div>
    </div>

    <div class="pb-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</form>
@endsection