@if(session('success'))
    <div style="padding:10px; background:green; color:white; margin-bottom:10px;">
        {{ session('success') }}
    </div>
@endif

<h1>Task List</h1>

<a href="{{ route('tasks.create') }}">Create Task</a>

<hr>

@forelse($tasks as $task)
    <div>
        <h3>{{ $task->title }}</h3>

        <p>{{ $task->description }}</p>

        <p>Status: {{ $task->status }}</p>

        <p>Due date: {{ $task->due_date }}</p>
    </div>

    <a href="{{ route('tasks.edit', $task) }}">
        Edit
    </a>

    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>
    </form>

    <hr>
@empty
    <p>No tasks found.</p>
@endforelse