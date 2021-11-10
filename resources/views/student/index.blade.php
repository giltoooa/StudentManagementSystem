@extends("layouts.layout");
@section("content")

<?php $i = 0; ?>
<div id="content">
    <a href="student/create">Add New Student</a>
    <table style="border:2px" border="2px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Reporting Teacher</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{++$i}}</td>
            <td><a href="/student/{{$student->id}}">{{$student->name}}</a></td>
            <td>{{$student->age}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->teacher->name}}</td>
            <td> <a class="btn btn-primary" href="student/{{$student->id}}/edit">Edit</a></td>
            <td>
                <form method="post" action="/student/{{$student->id}}">
                    @csrf
                    @method("DELETE")
                    <button onclick="return confirm('Are you sure ? ');"  class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</div>
@endsection