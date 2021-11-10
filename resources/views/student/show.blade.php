@extends("layouts.layout");
@section("content")

<div id="content">
  <a href="/student">View All Student</a>
  <br>
  <br>
  <h5><b>Id : </b> {{$student->id}}</h5>
  <h5><b>Name : </b> {{$student->name}}</h5>
  <h5><b>Age : </b> {{$student->age}}</h5>
  <h5><b>Gender : </b> {{$student->gender}}</h5>
  <h5><b>Reporting Teacher : </b> {{$student->teacher->name}}</h5> 
  <form method="post" action="/student/{{$student->id}}">
    @csrf
    @method("DELETE")
      <button onclick="return confirm('Are you sure ? ');"  class="btn btn-danger">Delete</button>
  </form>
</div>

@endsection