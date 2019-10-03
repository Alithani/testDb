@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('StudentController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="fname" class="form-control" value="{{$student->fname}}" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
    <input type="text" name="lname" class="form-control" value="{{$student->lname}}" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="text" name="mobile" class="form-control" value="{{$student->mobile}}" placeholder="Enter Mobile" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Save" />
   </div>
  </form>
 </div>
</div>

@endsection