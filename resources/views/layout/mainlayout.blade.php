<!doctype html>
<html lang="en">
    <head>
        @include('layout.partials.head')
    </head>
    
    <body class="container-fluid">
        <header>
            @include('layout.partials.header')
        </header>
        
        <main class="margin-top-6" id="app">
            <!-- content goes here -->
            @yield('content')
            <!-- /content -->
        </main>
        
        @include('layout.partials.footer-scripts')
    </body>
</html>
