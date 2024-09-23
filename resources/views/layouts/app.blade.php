<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Booking System')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- <h1>Hotel Booking System</h1> -->
        <nav>
            <!-- <a href="{{ route('rooms.index') }}">Rooms</a> -->
            <!-- <a href="{{ route('rooms.create') }}">Create Room</a> -->
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- <p>&copy; {{ date('Y') }} Hotel Booking System</p> -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
