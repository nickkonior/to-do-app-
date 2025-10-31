@extends('layouts.app')

@section('content')
<h1>Create Project</h1>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>
    <button type="submit">Create</button>
</form>
@endsection
