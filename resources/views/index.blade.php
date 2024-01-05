<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('header')
    <title>Grade Viewer</title>
</head>
<body>
    <div class="loader"></div>

    <div id="app-cover">
        <div id="app">
            <form method="post" action="{{ route('studentForm') }}">
                @csrf
                <div id="f-element">
                    <div id="inp-cover"><input type="text" class="numbers" name="student_number" inputmode="numeric" placeholder="Enter your student number..." autocomplete="off" required></div>
                </div>
                <button type="submit" class="shadow"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div id="layer" title="Click the blue area to hide the form"></div>
        <div id="init"></div>
      </div>

</body>
</html>
