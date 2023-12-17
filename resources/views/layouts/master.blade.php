<!-- master.blade.php -->
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/app.css" rel="stylesheet">
    <title>@yield('page_title')</title>
</head>

<body class="flex flex-col min-h-screen">
    <header-tag>
        @include('_header')
    </header-tag>
    <content-tag>
        @yield('content')
    </content-tag>
    @include('_footer')
    @include('projects.projecten')
</body>
</html>
