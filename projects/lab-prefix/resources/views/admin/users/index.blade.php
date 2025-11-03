<!DOCTYPE html>
<html>
<head>
    <title>User</title>
</head>
<body>
    <h1>User List</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
</body>
</html>