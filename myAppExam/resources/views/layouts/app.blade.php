<!DOCTYPE html>
<html>
<head>
    <title>My TPS App</title>
</head>
<body>
    <nav>
        <a href="{{ route('students.index') }}">Students</a> |
        <a href="{{ route('sections.index') }}">Sections</a>
    </nav>
    <hr>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
