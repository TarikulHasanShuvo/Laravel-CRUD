@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>All Student</h4>
                <a href="{{url('student/create')}}" class="btn btn-primary">+Add Student</a>

                </div>

                <div class="card-body">
                   <table class="table">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Eamil</th>
                           <th>Age</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($students as $student)


                       <tr>
                       <td>{{$student->id}}</td>
                           <td>{{$student->name}}</td>
                           <td>{{$student->email}}</td>
                           <td>{{$student->age}}</td>
                           <td>
                            <a href="{{route('student.edit',['id'=>$student->id])}} " class="btn btn-success btn-sm">Edit</a>
                            <a href="{{route('student.destroy',['id'=>$student->id])}}" class="btn btn-danger btn-sm">Delete</a>


                           </td>
                       </tr>
                       @endforeach
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
