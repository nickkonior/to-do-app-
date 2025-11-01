@extends('layouts.app')

<h2 class="text-2xl font-bold mb-4">{{ $project->name }} - Tasks</h2>

<a href="{{ route('projects.tasks.create', $project) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Add Task</a>

<ul class="mt-4">
@foreach($tasks as $task)
    <li class="flex items-center justify-between border-b py-2">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <button class="mr-2 text-xl">{{ $task->is_completed ? '✅' : '⬜' }}</button>
        </form>
        <span>{{ $task->title }}</span>
        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-red-500 hover:text-red-700">🗑️</button>
        </form>
    </li>
@endforeach
</ul>

