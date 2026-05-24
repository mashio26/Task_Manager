<h1>Create Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <br>

    <div>
        <label>Status</label>

        <select name="status">
            <option value="todo">Todo</option>
            <option value="doing">Doing</option>
            <option value="done">Done</option>
        </select>
    </div>

    <br>

    <div>
        <label>Due date</label>
        <input type="date" name="due_date">
    </div>

    <br>

    <button type="submit">
        Save
    </button>
</form>