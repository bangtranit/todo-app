@extends('layout.app')
@section('title')
    create new task
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action={{Route('todos.store')}} method="POST">
                    @csrf
                    <div class="card-header">
                        Create new todo
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <textarea name="description" cols="20" rows="10" class="form-control"
                                      placeholder="description"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success">Create Todo</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection