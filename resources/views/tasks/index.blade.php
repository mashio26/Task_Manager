@extends('layouts.app')

@section('content')

<a href="{{ route('tasks.create') }}"
   class="bg-blue-500 text-white px-4 py-2 rounded">
    + Create Task
</a>

@if(session('success'))
    <div class="bg-green-500 text-white p-3 mt-4 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="mt-6 space-y-4">

@forelse($tasks as $task)
    <div class="bg-white p-4 rounded shadow">

        <h3 class="text-xl font-bold">
            {{ $task->title }}
        </h3>

        <p class="text-gray-600">
            {{ $task->description }}
        </p>

        <div class="text-sm mt-2">
            Status: <strong>{{ $task->status }}</strong>
        </div>

        <div class="text-sm mt-2">
            {{ $task->due_date }}
        </div>

        <div class="flex gap-2 mt-4">

            <a href="{{ route('tasks.edit', $task) }}"
               class="bg-yellow-400 px-3 py-1 rounded">
                Edit
            </a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="bg-red-500 text-white px-3 py-1 rounded">
                    Delete
                </button>
            </form>

        </div>

    </div>
@empty
    <p>No tasks found</p>
@endforelse

</div>

@endsection