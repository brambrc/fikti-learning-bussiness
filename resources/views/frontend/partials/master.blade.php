<!DOCTYPE html>
<html lang="en">

    @include('frontend.partials.head')
    <body>
        @include('frontend.partials.navbar')

        @yield('content')

        @include('frontend.partials.footer')
        @include('frontend.partials.script')
        @yield('script')

    </body>
</html>