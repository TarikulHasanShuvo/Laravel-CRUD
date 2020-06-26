@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Add Student</h4>
                <a href="{{url('/student')}}" class="btn btn-primary">Back All Student</a>

                </div>

                <div class="card-body">

                    <form action="{{route('student.insert')}}" method="post">
                    @csrf
                    <div class="form-group">
                        @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>

                        @endif
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                         </div>

                         <div class="form-group">
                        <label for="email">eamil</label>
                        <input type="eamil" class="form-control" name="email" placeholder="Enter eamil">
                         </div>

                         <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" placeholder="Enter Age">
                         </div>

                       <button type="submit" class="btn btn-danger">submit</button>

                    </form>






                  </div>
              </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
