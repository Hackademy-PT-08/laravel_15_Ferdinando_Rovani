<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if(Route::currentRouteName() == 'SuccessEmail')
        <meta http-equiv="refresh" content="5; {{ route('Home') }}">
    @endif
 
    <title>Document</title>
    @livewireStyles
</head>
<body>
    <header>
        <x-navbar></x-navbar>
    </header>
    <main>
        <div class="min-vh-100 pt-5">          
            {{$slot}}
        </div>
    </main>
    <footer>
        <x-footer></x-footer>
    </footer>

    @livewireScripts    
</body>
</html>