@extends('layouts.app')

@section('content')
<h2>Add Task to {{ $project->name }}</h2>

<form action="{{ route('projects.tasks.store', $project) }}" method="POST">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title" required>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>
    <button type="submit">Add Task</button>
</form>
@endsection
