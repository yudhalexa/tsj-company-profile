<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | Tekno Solusi</title>

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')
</head>
<body>

    @include('includes.header')
        @yield('content')
    @include('includes.footer')    

    @stack('before-script')
    {{-- script --}}
    @include('includes.script')
    
    @stack('after-script')
</body>
</html>