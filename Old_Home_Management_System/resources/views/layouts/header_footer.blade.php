<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Old Home Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="nav-brand">Old Home Care</div>
        <div class="nav-links">
            <!-- @if(!session()->has('user_id')) -->

                <a href="/">Home</a>
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            <!-- @else -->
                
                <a href="/dashboard">Dashboard</a>

                <!-- @if(session('role') === 'Admin' || session('role') === 'Supervisor') -->
                    <a href="/approvals">Approvals</a>
                    <a href="/roster">Roster</a>
                    <a href="/employees">Employees</a>
                <!-- @endif -->

                <!-- @if(session('role') === 'Admin') -->
                    <a href="/reports">Reports</a>
                    <a href="/payments">Payments</a>
                <!-- @endif -->

                <!-- @if(session('role') === 'Doctor') -->
                    <a href="/appointments">Appointments</a>
                <!-- @endif -->

                <a href="/logout" class="btn-outline">Logout</a>
            <!-- @endif -->
        </div>
    </nav>
</header>

    <main class="container">
        @yield('content')
    </main>

    <footer style="text-align: center; padding: 2rem; color: var(--text-muted); font-size: 0.85rem;">
        &copy; 2026 Old Home Management System
    </footer>
</body>
</html>