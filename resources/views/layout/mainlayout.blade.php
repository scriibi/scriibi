<!doctype html>
<html lang="en">
    <head>
        @include('layout.partials.head')
    </head>
    
    <body class="container-fluid">
        <header>
            @include('layout.partials.header')
        </header>
        
        <main id="app">
            <!-- content goes here -->
            @yield('content')
            <!-- /content -->
        </main>
        
        @include('layout.partials.footer-scripts')
    </body>
</html>
