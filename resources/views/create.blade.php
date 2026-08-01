@extends('layouts.main')
@section('main-section')
    <div class="container">
        <div class="mt-5 d-flex justify-content-between align-items-center">
        <div class="h1">Create / Add Todo</div>
        <a href='{{route("todo.home")}}' class="btn btn-primary mt-3 text-white">Back</a>
        </div>
        <br>
        {{-- {{print_r($errors->all())}} --}}
        <div class="card">
            <div class="card-body">
                <form action="{{route('todo.store')}}" method="post">
                 @csrf
                <label for="">Name</label>
                <input type="text" name='name' class='form-control'>
                <div class='text-danger'>
                @error('name') 
                {{$message}}
                @enderror
                </div>
                <label for="" class='mt-3' >Work</label>
                <input type="text" name='work' class='form-control'>
                <div class='text-danger'>
                @error('work') 
                {{$message}}
                @enderror
                </div>
                <label for="" class='mt-3'>Due Date</label>
                <input type="date" name='dueDate' class='form-control'>
                <div class='text-danger'>
                @error('dueDate') 
                {{$message}}
                @enderror
                </div>
                <br>
                <button class="btn btn-primary mt-3">Add Todo</button>
                </form>
            </div>
        </div>
    </div>
@endsection