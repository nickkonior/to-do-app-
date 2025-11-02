<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-8 py-4 bg-white shadow">
        <div class="text-2xl font-bold text-blue-600">
            To-Do App
        </div>

        <div class="space-x-8 hidden md:flex">
            <a href="#what-we-do" class="hover:text-blue-600">What We Do</a>
            <a href="#who-we-are" class="hover:text-blue-600">Who We Are</a>
            <a href="#contact" class="hover:text-blue-600">Contact</a>
        </div>

        <button id="authBtn" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Login / Register
        </button>
    </nav>

    <!-- Hero Section -->
    <section class="text-center py-24 bg-gradient-to-b from-blue-100 to-white">
        <h1 class="text-5xl font-bold mb-4">Organize Your Projects Easily</h1>
        <p class="text-lg text-gray-600 mb-6">Track your progress and manage tasks efficiently with our simple To-Do app.</p>
        <button id="authBtn2" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
            Get Started
        </button>
    </section>

    <!-- Info Sections -->
    <section id="what-we-do" class="max-w-5xl mx-auto py-16">
        <h2 class="text-3xl font-semibold text-center mb-6">What We Do</h2>
        <p class="text-center text-gray-600 max-w-3xl mx-auto">
            We help users organize their work and personal life through simple project and task management tools.
        </p>
    </section>

    <section id="who-we-are" class="bg-gray-100 py-16">
        <h2 class="text-3xl font-semibold text-center mb-6">Who We Are</h2>
        <p class="text-center text-gray-600 max-w-3xl mx-auto">
            A small team passionate about productivity and user experience.
        </p>
    </section>

    <!-- Footer -->
    <footer id="contact" class="py-6 text-center text-gray-500 border-t">
        © {{ date('Y') }} To-Do App. All rights reserved.
    </footer>

    <!-- Auth Modal -->
    <div id="authModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-96 p-6 relative">
            <button id="closeModal" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">✕</button>
            <h3 class="text-2xl font-bold text-center mb-6">Welcome Back</h3>

            @include('auth.login-register') {{-- Custom merged form --}}
        </div>
    </div>

    <script>
        const modal = document.getElementById('authModal');
        document.getElementById('authBtn').addEventListener('click', () => modal.classList.remove('hidden'));
        document.getElementById('authBtn2').addEventListener('click', () => modal.classList.remove('hidden'));
        document.getElementById('closeModal').addEventListener('click', () => modal.classList.add('hidden'));
    </script>
</body>
</html>
