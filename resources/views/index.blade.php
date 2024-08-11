@extends('layouts.master')

@section('content')
    <div class="search-form">
        <form action="{{ route('studentsList') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" id="search" class="form-control search-input" placeholder="Search by student name" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
        </form>
    </div>
    <div class="heading">
        <h2 class="mb-4 mt-4">Total Student : {{$students->total()}}</h2>
        <a href="{{ route('student') }}" class="text-white right-btn"><button class="btn btn-primary">Add Student</button></a>
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
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="main_head">
                <th scope="col">ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Class</th>
                <th scope="col">Admission Date</th>
                <th scope="col">Yearly Fees</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($students) > 0)
                @foreach($students as $index=>$student)
                 <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->classTeacher->teacher_name}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{ \Carbon\Carbon::parse($student->admission_date)->format('d-m-Y') }}</td>
                    <td>{{$student->yearly_fees}} &#8377; </td>
                    <td><a href="{{route('update-status', [$student->id, $student->status == 1 ? 0 : 1])}}"><i class="fa fa-toggle-{{ $student->status == 1 ? 'on' : 'off' }}" aria-hidden="true"></i></a></td>
                    <td><a href="{{ route('show-student', $student->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;
                        {{-- <a href="{{ route('delete-student', $student->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td> --}}
                        <a href="#" onclick="event.preventDefault(); confirmDelete({{ $student->id }});">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        <!-- Hidden Form for Deletion -->
                        <form id="delete-form-{{ $student->id }}" action="{{ route('delete-student', $student->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                 </tr>
                @endforeach
                @else
                  <tr class="text-center">
                    <td colspan="7">No Student Found</td>
                  </tr>
                @endif
            </tbody>
        </table>
        
    </div>
    <div class="pagination-container">
        {{ $students->links('pagination::bootstrap-4') }}
    </div>
@endsection

<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this student?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
