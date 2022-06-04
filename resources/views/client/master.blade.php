<!DOCTYPE html>
    <html lang="en">
    <head>
        @include('client.head')
    </head>
    <body class="{{$color}}">
        <!--=============== HEADER ===============-->
        @include('client.menu')

        <!--=============== MAIN ===============-->
        @yield('content')

        <!--=============== FOOTER ===============-->
        @include('client.foot')

        <!--=============== SCROLLREVEAL ===============-->
        @include('client.bottom')
    </body>
    @yield('js')
</html>
