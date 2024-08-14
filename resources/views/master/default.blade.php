<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('master.parts.head')
</head>

<body class=" bg-arkaplan w-full h-full absolute overflow-hidden">
    <div class="relative w-full h-full">
    @yield('content')
    @include('master.parts.foot')
    </div>
</body>

</html>
