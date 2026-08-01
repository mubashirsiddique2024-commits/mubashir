@extends('layouts.main')
@section('main-section')
    <div class="container">
        <div class="mt-5 d-flex justify-content-between align-items-center">
        <div class="h1">All Todo</div>
        <a href='{{route("todo.create")}}' class="btn btn-primary mt-3">Add Todo</a>
        </div>
        <table class="table table-stripped table-dark mt-5">
            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
            @foreach ($todos as $todo)

            <tr valign='middle'>
                <td>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>{{$todo->dueDate}}</td>

            <td>
                <div class="d-flex gap-2">
                    <form action='{{ route("todo.delete", $todo->id) }}' method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    &nbsp;&nbsp;&nbsp;
            <form action='{{ route("todo.edit", $todo->id) }}' method="get"> 
                    @csrf
                <button type='submit' class='btn btn-success btn-sm'>Update</button>
            </form>
        </div>
        </td>
            </tr>
            @endforeach
        </table>
    </div> 
@endsection

