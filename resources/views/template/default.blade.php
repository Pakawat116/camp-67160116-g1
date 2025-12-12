<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
<html>
    <head>
        <title>ส่วนหัวของ HTML - @yield('title')</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Exo 2", sans-serif;
            }
        </style>
        @stack('styles')
    </head>
    <body>
        <div class="card-form mt-4 contaner">
            <h1> File Default</h1>
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>