@extends("layouts.layout")
@section("content")

<a href="/student">View All Student</a>
<form method="post" action="/student">
    @csrf
    <div class="form-group">
        <lable for=""><b>Student Name</b></label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control" style="width:50%"  >
        @if($errors->has("name"))
        <p style="color:red">{{$errors->first("name")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Age</b></label>
        <input type="text" name="age" value="{{old('age')}}" class="form-control" style="width:50%" >
        @if($errors->has("age"))
        <p style="color:red">{{$errors->first("age")}}</p>
        @endif
    </div>
    <div class="form-group">
        <lable for=""><b>Gender</b></label>
        </label>  <br>  
        <input  type="radio" id="gender" name="gender" value="M" @if(old('gender') && old('gender')=="M" ) checked @endif /> Male 
        <input  type="radio" id="gender" name="gender" value="F"  @if(old('gender') && old('gender')=="F") checked @endif /> Female <br/>
        @if($errors->has("gender"))
        <p style="color:red">{{$errors->first("gender")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Teacher Name</b></label>
        <select  class="form-control" id="teacher_id" name="teacher_id" style="width:50%" >
        <option value="" selected disabled hidden>
          Select an Option
      </option>
        @foreach($teacherDetails as $teacher))
        <option value="{{$teacher->id}}"  @if (old('teacher_id') ==$teacher->id) selected="selected" @endif>{{$teacher->name}}</option>
        @endforeach
        </select>
        @if($errors->has("teacher_id"))
        <p style="color:red">{{$errors->first("teacher_id")}}</p>
        @endif
    </div>

    <div class="form-group">
        <button  class="btn btn-primary">Save</button>
    </div>
</form>

@endsection