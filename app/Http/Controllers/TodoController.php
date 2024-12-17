<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Fetch all todos
    public function index()
    {
        $todos = Todo::all(['id','title','completed']);
        return response()->json($todos);
    }

    // Fetch a single todo
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    // Create a new todo
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required|string|max:255',
        // ]);

        // $todo = Todo::create([
        //     'title' => $validated['title'],
        //     'completed' => false, // Default to not completed
        // ]);

        // return response()->json($todo, 201); // Return with HTTP status 201 (Created)

        $todo = Todo::create($request->post());
        return response()->json([
            'message'=>'Todo Item Created Successfully!!',
            'todo'=>$todo
        ]);
    }

    // Update an existing todo
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'completed' => 'sometimes|required|boolean',
        ]);

        $todo->update($validated);

        return response()->json($todo);
    }

    // Delete a todo
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json(['message' => 'Todo deleted successfully'], 200);
    }
}
