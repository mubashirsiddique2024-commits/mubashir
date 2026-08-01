@extends('layouts.main')
@section('main-section')
<div class="container">
    <div class="mt-5 d-flex justify-content-between align-items-center">
        <div class="h1">Update Todo</div>
        <a href="{{ route('todo.home') }}" class="btn btn-primary mt-3 text-white">Back</a>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('todo.updateData') }}" method="post">
                 @csrf
                <label for="">Name</label>
                <input type="text" name="name" class='form-control' value='{{$todo->name}}'>
                <br>
                <label for="">Work</label>
                <input type="text" name="work" class='form-control' value='{{$todo->work}}'>
                <br>
                <label for="">Due Date</label>
                <input type="date" name="dueDate" class='form-control' value='{{$todo->dueDate}}'>

                <button type="submit" class="btn btn-primary mt-4">Update Todo</button>
                <input type="hidden" name='id' value='{{$todo->id}}'>
                </form>
            </div>
        </div>
    </div>
@endsection
