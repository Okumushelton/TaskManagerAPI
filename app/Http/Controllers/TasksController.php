<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->toArray();
        return array_reverse($tasks);
    }
    public function store(Request $request)
    {
        $task = new Task([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        $task->save();
        return response()->json('Task created successfully!!');
    }
    public function show($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }
    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return response()->json('Task updated successfully!!');
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return response()->json('Task deleted successfully!!');
    }
}
