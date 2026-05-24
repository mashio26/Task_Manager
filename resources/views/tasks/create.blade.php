@extends('layouts.app')

@section('content')

<div class="bg-white p-6 rounded shadow">

<form action="{{ route('tasks.store') }}" method="POST">
@csrf

<input type="text" name="title"
       placeholder="Title"
       class="w-full border p-2 mb-3 rounded">

<textarea name="description"
          placeholder="Description"
          class="w-full border p-2 mb-3 rounded"></textarea>

<select name="status"
        class="w-full border p-2 mb-3 rounded">
    <option value="todo">Todo</option>
    <option value="doing">Doing</option>
    <option value="done">Done</option>
</select>

<input type="date" name="due_date"
       class="w-full border p-2 mb-3 rounded">

<button class="bg-blue-500 text-white px-4 py-2 rounded">
    Save
</button>

</form>

</div>

@endsection