<h1>Edit Task</h1>

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label>

        <input
            type="text"
            name="title"
            value="{{ $task->title }}"
        >
    </div>

    <br>

    <div>
        <label>Description</label>

        <textarea name="description">{{ $task->description }}</textarea>
    </div>

    <br>

    <div>
        <label>Status</label>

        <select name="status">
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
    </div>

    <br>

    <div>
        <label>Due date</label>

        <input
            type="date"
            name="due_date"
            value="{{ $task->due_date }}"
        >
    </div>

    <br>

    <button type="submit">
        Update
    </button>
</form>