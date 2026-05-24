@extends('layouts.app')

@section('content')

<div class="bg-white p-6 rounded shadow">

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title"
        placeholder="Title"
        class="w-full border p-2 mb-3 rounded"
        value="{{ $task->title }}">

    @error('title')
        <div style="color:red;">
            {{ $message }}
        </div>
    @enderror

    <textarea name="description"
            placeholder="Description"
            class="w-full border p-2 mb-3 rounded">{{ $task->description }}</textarea>

    <select name="status"
            class="w-full border p-2 mb-3 rounded">
        <option value="todo" {{ $task->status === 'todo' ? 'selected' : '' }}>
            Todo
        </option>
        <option value="doing" {{ $task->status === 'doing' ? 'selected' : '' }}>
            Doing
        </option>
        <option value="done" {{ $task->status === 'done' ? 'selected' : '' }}>
            Done
        </option>
    </select>

    <input type="date" name="due_date"
        class="w-full border p-2 mb-3 rounded"
        value="{{ $task->due_date }}">

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Save
    </button>

</form>

</div>

@endsection