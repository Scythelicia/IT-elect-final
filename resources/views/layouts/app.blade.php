<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Product Management')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">Product Management</a>
            <!-- Theme Toggle Button -->
            <button id="theme-toggle" class="btn btn-secondary ml-3">Toggle Theme</button>
        </div>
    </nav>
    
    <!-- Main Content Area -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- JavaScript for Theme Toggle -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        // Set initial theme based on localStorage or default to light mode
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
        }

        // Toggle between light and dark mode
        themeToggle.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            
            // Save the current theme to localStorage
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>
</html>
