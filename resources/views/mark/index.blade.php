@extends("layouts.layout");
@section("content")
<?php $i = 0; ?>

<div id="content">
    <a href="mark/create">Add New Mark</a>
    <table style="border:2px" border="2px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Maths</th>
            <th>Science</th>
            <th>History</th>
            <th>Term</th>
            <th>Total Marks</th>
            <th>Created On</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($marks as $mark)
        <tr>
            <td>{{++$i}}</td>
            <td><a href="/mark/{{$mark->id}}">{{$mark->studentDetails->name}}</a></td>
            <td>{{$mark->maths}}</td>
            <td>{{$mark->science}}</td>
            <td>{{$mark->history}}</td>
            <td>{{$mark->term}}</td>
            <td>{{$mark->maths+$mark->history+$mark->science}}</td>
            <td>{{$mark->created_at->format('M j, Y H:i A')}}</td>
            <td> <a class="btn btn-primary" href="mark/{{$mark->id}}/edit">Edit</a></td>
            <td>
                <form method="post" action="/mark/{{$mark->id}}">
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