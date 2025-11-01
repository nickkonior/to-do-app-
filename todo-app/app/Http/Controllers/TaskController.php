<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class TaskController extends Controller
{
    // Show all tasks for a project
    public function index(Project $project)
    {
        $tasks = $project->tasks()->latest()->get();
        return view('tasks.index', compact('project', 'tasks'));
    }

    // Show form to create a new task
    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }

    // Store a new task
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('projects.show', $project)->with('success', 'Task created!');
    }

    // Optional: toggle task completion
    public function update(Request $request, Project $project, Task $task)
    {
        $task->is_completed = !$task->is_completed;
        $task->save();

        return redirect()->route('projects.show', $project);
    }

    // Delete a task
    public function destroy(Project $project, Task $task)
    {
        $task->delete();
        return redirect()->route('projects.show', $project);
    }
}
