@extends('master')

@section('content')

<div class="row">

    <div class="col-mid-12">
        <br>
        <h1>Add Student Details</h1>
        <br>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(\Session::has('success'))
            <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
            </div>
            @endif
            
            <div align="right">
                <a href="{{route('student.index')}}" class="btn btn-primary">View Details</a>
                <br />
                <br />
            </div>

            <form method="post" action="{{url('student')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
    </div>
</div>



@endsection