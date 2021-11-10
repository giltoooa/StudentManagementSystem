@extends("layouts.layout")
@section("content")

<a href="/mark">View All Mark</a>
<form method="post" action="/mark">
    @csrf
    <div class="form-group">
        <lable for=""><b>Student Name</b></label>
        <select  class="form-control" id="student_id" name="student_id" style="width:50%" >
        <option value="" selected disabled hidden>
          Select a Name
      </option>
        @foreach($students as $student))
        <option value="{{$student->id}}"  @if (old('student_id') ==$student->id) selected="selected" @endif>{{$student->name}}</option>
        @endforeach
        </select>
        @if($errors->has("student_id"))
        <p style="color:red">{{$errors->first("student_id")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Term</b></label>
        </label>  <br>  
        <input  type="radio" id="term" name="term" value="One" @if(old('term') && old('term')=="One" ) checked @endif /> One 
        <input  type="radio" id="term" name="term" value="Two"  @if(old('term') && old('term')=="Two") checked @endif /> Two <br/>
        @if($errors->has("term"))
        <p style="color:red">{{$errors->first("term")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Maths</b></label>
        <input type="text" name="maths" value="{{old('maths')}}" class="form-control" style="width:50%" >
        @if($errors->has("maths"))
        <p style="color:red">{{$errors->first("maths")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Science</b></label>
        <input type="text" name="science" value="{{old('science')}}" class="form-control" style="width:50%" >
        @if($errors->has("science"))
        <p style="color:red">{{$errors->first("science")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>History</b></label>
        <input type="text" name="history" value="{{old('history')}}" class="form-control" style="width:50%" >
        @if($errors->has("history"))
        <p style="color:red">{{$errors->first("history")}}</p>
        @endif
    </div>
    
    <div class="form-group">
        <button  class="btn btn-primary">Save</button>
    </div>
</form>

@endsection