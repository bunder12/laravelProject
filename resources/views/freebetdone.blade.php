<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Form Freebet</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-slate-800 h-screen flex items-center justify-center">
        <div class="w-[500px] sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-slate-300 border-b border-gray-200">
                    @if (session()->has('success'))
                        <div class="alert alert-success flex flex-col">
                            <div class="w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{ session('success') }}</span>
                            </div>
                            <p class="pt-2">Untuk melihat info selanjutnya silahkan klik <a class="link link-secondary">disini</a></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>