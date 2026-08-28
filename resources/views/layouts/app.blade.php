<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Registration') | College of Information Technology</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#FFFFFF] text-[#09090B]">
    <header class="border-b border-[#E4E4E7] bg-[#FFFFFF]">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
            <a href="{{ route('students.index') }}" class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-full border border-[#09090B] text-base font-bold text-[#09090B]">IT</span>
                <span>
                    <span class="block text-lg font-semibold leading-tight text-[#09090B]">College of Information Technology</span>
                    <span class="block text-[11px] font-semibold uppercase tracking-[0.14em] text-[#71717A]">Student Registration Registry</span>
                </span>
            </a>
            <nav class="flex items-center gap-4 text-sm font-medium">
                <a href="{{ route('students.index') }}" class="text-[#71717A] transition hover:text-[#09090B]">Registry</a>
                <a href="{{ route('students.create') }}" class="rounded-full bg-[#09090B] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#27272A]">+ New Registration</a>
            </nav>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-10">
        @if (session('success'))
            <div class="mb-6 flex items-start gap-3 rounded-2xl border border-[#E4E4E7] bg-[#F8F9FA] px-5 py-4">
                <span class="text-xl leading-none font-bold text-[#09090B]">&#10003;</span>
                <div>
                    <p class="font-semibold text-[#09090B]">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="mx-auto max-w-5xl px-6 py-8 text-xs font-semibold uppercase tracking-[0.14em] text-[#71717A]">
        College of Information Technology &mdash; Digital Registration System
    </footer>
</body>
</html>
