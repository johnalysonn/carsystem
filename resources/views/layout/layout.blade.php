<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crud - @yield('title')</title>
</head>
<style>.d-none{display: none}</style>
<body>
    <header>
        <h2>Crud</h2>
        <nav>
            <ul>
                <li><a href="{{route('car.index')}}">Home</a></li>
                <li><a href="{{route('car.create')}}">Create</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="d-none" id="msg"></div>
        @if(Session('msg'))
        <div>{{Session('msg')}}</div>
        @endif
        <div>
            @yield('content')
        </div>
    </main>


    <script src="http://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{asset('assets/js/ajax.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
