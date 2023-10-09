<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>
    @include('layouts.navbar')

    @include('layouts.sidebar')

    <div class="p-1 sm:ml-0">
        <div class="p-1 mt-0">
            <div class="p-4 sm:ml-64">
                <div class="p-4 mt-10">
                    <h1><?= $description; ?></h1>
                </div>
            </div>
            <div class="pl-4 sm:ml-64">
                <div class="pl-4 mt-0">
                    @yield('content')
                </div>
            </div>
            <!-- <div class="container">
                <div class="ml-72 mr-10 sm:ml-64 ">
                    @yield('content')
                </div>
            </div> -->
        </div>
    </div>

    <script src="https://kit.fontawesome.com/4d4f3c0a84.js" crossorigin="anonymous"></script>
</body>

</html>