@extends("layouts.layout");
@section("content")

<form method="post" action="/mark/{{$mark->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <lable for=""><b>Student Name</b></label>
        <select  class="form-control" id="student_id" name="student_id" style="width:50%" >
        @foreach($students as $student))
        <option value="{{$student->id}}" {{ ( $student->id == $mark->student_id) ? 'selected' : '' }}>
        {{$mark->studentDetails->name}}
              </option>
        @endforeach
        </select>
        @if($errors->has("student_id"))
        <p style="color:red">{{$errors->first("student_id")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Term</b></label>
        </label>  <br>  
        <input  type="radio" id="term" name="term" value="One" @if($mark->term=="One") checked @endif /> One 
        <input  type="radio" id="term" name="term" value="Two" @if($mark->term=="Two") checked @endif /> Two <br/>
        @if($errors->has("term"))
        <p style="color:red">{{$errors->first("term")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Maths</b></label>
        <input type="text" name="maths" value="{{$mark->maths}}" class="form-control" style="width:50%" >
        @if($errors->has("maths"))
        <p style="color:red">{{$errors->first("maths")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Science</b></label>
        <input type="text" name="science" value="{{$mark->science}}" class="form-control" style="width:50%" >
        @if($errors->has("science"))
        <p style="color:red">{{$errors->first("science")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>History</b></label>
        <input type="text" name="history" value="{{$mark->history}}" class="form-control" style="width:50%" >
        @if($errors->has("history"))
        <p style="color:red">{{$errors->first("history")}}</p>
        @endif
    </div>
    
    <div class="form-group">
        <button  class="btn btn-primary">Save</button>
    </div>
</form>

@endsection