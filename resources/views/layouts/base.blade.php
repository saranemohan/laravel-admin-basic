<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }}</title>
        
        {{-- Css External Plugin Optional --}}
        @stack('css-plugin')

        {{-- Css Custom Stylesheets --}}
        @stack('css-custom') 

        {{-- JS External Plugin Optional --}}
        @stack('js-plugin-top')

    </head> 

    @yield('body')

    {{-- JS External Plugin Optional --}}
    @stack('js-plugin')

    {{-- JS Custom Scripts --}}
    @stack('js-custom')  

</html>