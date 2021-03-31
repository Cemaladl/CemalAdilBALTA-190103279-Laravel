<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Client</title>
</head>
<body>
<form method="POST" action="{{ route('add-client') }}">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="age" placeholder="Age">
        <button type="submit">Create</button>
    </form>
</body>
</html>