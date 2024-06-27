<!DOCTYPE html>
<html lang="en">
@include('includes.header')

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
</body>

</html>