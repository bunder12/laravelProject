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
                            <p class="pt-2">Untuk melihat info selanjutnya, silahkan klik <a class="link link-secondary" href="/">disini</a></p>
                        </div>
                    @else()
                    <form class="w-full flex flex-col items-center justify-center" action="/freebet" method="POST">
                        @csrf
                        <div class="py-4 w-full">
                            <h1 class="text-4xl font-bold">Form Freebet</h1>
                        </div>
                        <div class="flex flex-col mb-4 w-full">
                        <label>Id</label>

                        <input type="text" name="idGame" id="idGame" placeholder="Masukan game id anda" class="input rounded-md w-full" value="{{old('idGame')}}" required/>
                        </div>
                        <div class="flex flex-col mb-4 w-full">
                        <label>Chanel</label>
                        <input type="text" name="chanel" id="chanel" placeholder="Type here" class="input rounded-md w-full" />
                        </div>
                        <div class="flex flex-col mb-4 w-full">
                        <label>Event</label>
                        <input type="text" name="event" id="event" placeholder="Event" class="input rounded-md w-full" required/>
                        </div>
                        <div class="flex flex-col mb-4 w-full">
                        <label>Web</label>
                        <input type="text" name="web" id="web" placeholder="Type here" class="input rounded-md w-full" />
                        </div>
                        <div class="flex mb-4 w-full">
                            <div class="mr-4">
                                <label>New Member</label>
                                <input name="typeMember" id="typeMember" type="radio" name="radio-1" class="radio" checked value="New Member"/>
                            </div>
                            <div>
                                <label>Old Member</label>
                                <input name="typeMember" id="typeMember" type="radio" name="radio-1" class="radio" value="Old Member"/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-active btn-primary w-full">Simpan</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>