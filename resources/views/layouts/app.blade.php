<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@lang('index.title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ Html::style(asset('css/app.css')) }}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
            </nav>
        </div>
        @yield('content')
        {{ Html::script(asset('js/app.js')) }}
    </body>

</html>
