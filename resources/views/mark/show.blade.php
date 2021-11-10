@extends("layouts.layout");
@section("content")

<div id="content">
  <a href="/mark">View All Mark</a>
  <br>
  <br>
  <h5><b>Id : </b> {{$mark->id}}</h5>
  <h5><b>Name : </b> {{$mark->studentDetails->name}}</h5>
  <h5><b>Maths : </b> {{$mark->maths}}</h5>
  <h5><b>Science : </b> {{$mark->science}}</h5>
  <h5><b>History : </b> {{$mark->history}}</h5>
  <h5><b>Term : </b> {{$mark->term}}</h5>
  <h5><b>Created On  : </b> {{$mark->created_at->format('M j, Y H:i A')}}</h5>
  
  <form method="post" action="/mark/{{$mark->id}}">
    @csrf
    @method("DELETE")
    <button onclick="return confirm('Are you sure ? ');"  class="btn btn-danger">Delete</button>
  </form>
</div>

@endsection