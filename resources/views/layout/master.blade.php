<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة سريع العربية للمقاولات</title>
    @include('layout.parts.style')
    @yield('style')
</head>

<body>
    @include('layout.parts.fly_icon')
    <section class="nav-overlay"></section>
    @include('layout.parts.navbar')

    @yield('content')

    @include('layout.parts.footer')

    @include('layout.parts.script')
    @yield('script')

</body>

</html>
