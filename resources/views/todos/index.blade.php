@extends('layout.app')
@section('title')
    Todo List
@endsection
@section('content')
    <h1 class="text-center">Todo List</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 offset-md-2">
            <div class="card card-default">
                <div class="card-header">
                        Todos
                    </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                @if(!$todo->completed)
                                    <a href={{Route('todos.complete', $todo->id)}}
                                        class="btn btn-warning btn-sm float-right">
                                    Complete</a>
                                @endif
                                <a href={{Route('todos.show', $todo->id)}}
                                        class="btn btn-info btn-sm float-right mr-2">
                                View</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection