<nav class="row nav-header pt-2 pb-2">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <!-- Navbar content -->
    <div class="d-inline-block col-12 col-sm-10 col-md-8 pt-2 pb-2">
        <ul class="nav-header-menu">
            <li><a class="nav-logo" href="/"><img class="logo" src="https://www.scriibi.com/wp-content/uploads/2018/04/scriibi-logo-tight-e1525256307991.png" /></a></li>
            <li><a href="/">HOME</a></li>
            <li><a href="/assessment-list">ASSESSMENT</a></li>
            <li><a href="/rubric-list">RUBRIC</a></li>
            <li><a href="#">SUPPORT MATERIAL</a></li>
            @if (Route::has('login'))
                @auth
                <li class="float-right"><a href="{{ route('logout') }}"">LOG OUT</a></li>
                @else
                <li class="float-right"><a href="{{ route('logout') }}"">LOG IN</a></li>
                @endauth
            @endif
        </ul>
    </div>
    <!-- /navbar content -->
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
</nav>
