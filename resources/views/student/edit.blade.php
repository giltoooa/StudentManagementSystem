@extends("layouts.layout");
@section("content")
 
<form method="post" action="/student/{{$student->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <lable for=""><b>Student Name</b></label>
        <input type="text" name="name" value="{{$student->name}}" class="form-control" style="width:50%"  >
        @if($errors->has("name"))
        <p style="color:red">{{$errors->first("name")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Age</b></label>
        <input type="text" name="age" value="{{$student->age}}" class="form-control" style="width:50%" >
        @if($errors->has("age"))
        <p style="color:red">{{$errors->first("age")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Gender</b></label>
        </label>  <br>  
        <input  type="radio" id="gender" name="gender" value="M" @if($student->gender=="M") checked @endif /> Male 
        <input  type="radio" id="gender" name="gender" value="F" @if($student->gender=="F") checked @endif /> Female <br/>
        @if($errors->has("gender"))
        <p style="color:red">{{$errors->first("gender")}}</p>
        @endif
    </div>

    <div class="form-group">
        <lable for=""><b>Teacher Name</b></label>
        <select  class="form-control" id="teacher_id" name="teacher_id" style="width:50%" >
        @foreach($teacherDetails as $teacher))
            <option value="{{ $teacher->id }}" {{ ( $teacher->id == $student->teacher_id) ? 'selected' : '' }}>
            {{$teacher->name}}
            </option>
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