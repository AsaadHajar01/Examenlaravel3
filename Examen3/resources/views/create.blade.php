<!-- resources/views/create.blade.php -->

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
        <label for="title">Titel:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="text">Tekst:</label>
        <textarea name="text" id="text" required></textarea>
    </div>
    <div>
        <label for="deadline">Deadline:</label>
        <input type="datetime-local" name="deadline" id="deadline" required>
    </div>
    <button type="submit">Taak aanmaken</button>
</form>
