<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body  class=" bg-gray-100 font-sans max-w-full p-0">
    <div class=" w-full p-0 m-0">
        <x-navbar></x-navbar>
    </div>
   @yield('content')
</body>
</html>