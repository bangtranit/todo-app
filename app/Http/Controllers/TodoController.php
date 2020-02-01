<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTodo;
use App\Http\Requests\UpdateTodo;

class TodoController extends Controller
{
    //fetch all todos from database
    //display them in the todos.index page
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(CreateTodo $request)
    {
        $validated = $request->validated();
        $todo = Todo::create($request->all());
        session()->flash('success', 'Todo created successfully');
        return redirect()->route('todos.index');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(UpdateTodo $request, Todo $todo)
    {
        $validated = $request->validated();
        $todo->update($request->all());
        session()->flash('success', 'Todo updated successfully');
        return redirect()->route('todos.index');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = Todo::HAS_COMPLETED;
        $todo->save();
        session()->flash('success', 'Complete todo successfully');
        return redirect()->route('todos.index');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Delete todo successfully');
        return redirect()->route('todos.index');
    }

}
