  <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        @include('layouts.front.head')
    </head>
    <body>
        @include('layouts.front.header')
        <div class="container-fluid">
            <div class="row d-flex align-items-stretch">
            @include('layouts.front.adminsidebar')
            @yield('content')

            </div>
        </div>
        @include('layouts.front.footer')

    </body>
</html>
