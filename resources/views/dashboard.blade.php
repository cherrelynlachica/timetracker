<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p>Please select your role:</p>
    <ul>
        <li><a href="{{ route('dashboard.role', ['role' => 'admin']) }}">Admin</a></li>
        <li><a href="{{ route('dashboard.role', ['role' => 'student']) }}">Student</a></li>
        <li><a href="{{ route('dashboard.role', ['role' => 'facilitator']) }}">Facilitator</a></li>
    </ul>
</body>
</html>
