<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create a category</title>
</head>
<body>
    <form action="/category" method="POST">
       @csrf
        <label for="">your label</label>
        <input name="label" type="text" placeholder='label'>
        <label for="">show</label>
        <input name="show" type="checkbox" value="1">
    <button type="submit">save a category</button>
    </form>
</body>
</html>