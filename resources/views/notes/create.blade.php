<!DOCTYPE html>
<html>
<head>
    <title>Create Note</title>
</head>
<body>
    <h1>Create a New Note</h1>

    <form action="/notes" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" required></textarea>
        <br>
        <button type="submit">Create Note</button>
    </form>

    <a href="/">Back to notes</a>
</body>
</html>
