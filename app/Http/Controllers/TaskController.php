<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function getOneTask(string $id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function createNewTask(Request $request)
    {
        $data = $request->all();
        Task::create($data);
        return response("New Task Created", 200);
    }

    public function updateTask(Request $request, string $id)
    {
        $data = $request->all();
        $task = Task::find($id);
        $task->update($data);
        return response("Task Updated", 200);
    }

    public function deleteTask(string $id)
    {
        Task::where('id', '=', $id)->delete();
        return response("Task Deleted", 200);
    }
}
