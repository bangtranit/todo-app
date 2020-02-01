@extends('layout.app')
@section('title')
    Single todo: {{$todo->name}}
@endsection
@section('content')
    <h1 class="text-center">{{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                        Todos
                    </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
            <a class="btn btn-info my-2" href={{Route('todos.edit', $todo->id)}}>Edit</a>
            <a class="btn btn-danger my-2" href={{Route('todos.delete', $todo->id)}}>Delete</a>
        </div>
    </div>
@endsection