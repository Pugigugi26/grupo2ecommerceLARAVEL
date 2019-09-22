  <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        @include('layouts.front.head')
    </head>
    <body>
        @include('layouts.front.header')
        <div class="">
            @include('layouts.front.adminsidebar')
            @yield('content')

            @include('layouts.front.footer')
        </div>
    </body>
</html>
