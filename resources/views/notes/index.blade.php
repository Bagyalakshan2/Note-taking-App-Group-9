<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
</head>
<body>
    <h1>Your Notes</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="/notes/create">Create a new note</a>

    <ul>
        @foreach ($notes as $note)
            <li>{{ $note->title }}: {{ $note->content }}</li>
        @endforeach
    </ul>
</body>
</html>
