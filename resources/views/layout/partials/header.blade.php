<nav class="row nav-header pt-2 pb-2" id="main-nav">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <!-- Navbar content -->
    <div class="d-inline-block col-12 col-sm-10 col-md-8 pt-2 pb-2">
        <ul class="nav-header-menu">
            <li><a class="nav-logo" href="/home"><img class="logo" src="https://www.scriibi.com/wp-content/uploads/2018/04/scriibi-logo-tight-e1525256307991.png" alt="Scriibi Logo" /></a></li>
            <li><a href="/home">HOME</a></li>
            <li><a href="/assessment-list">ASSESSMENT</a></li>
            <li><a href="https://writing.scriibi.com/search-lessons/">LESSONS</a></li>

            @if (Route::has('login'))
                @auth
                <li class="float-right"><a href="{{ route('logout') }}">LOG OUT</a></li>
                @else
                <li class="float-right"><a href="{{ route('logout') }}">LOG IN</a></li>
                @endauth
            @endif
        </ul>
    </div>
    <!-- /navbar content -->
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
</nav>
@if ($errors->any())
<div class="row error-container" id="error-pop-up">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <div class="d-none d-sm-block col-sm-10 col-md-8">
        <div class="error-content pl-3 pr-3">
            <span><strong>Error:</strong></span>
            <button type="button" id="error-close" class="error-close"><strong>X</strong></button>
            <ul id="error-content">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
        </div>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
</div>
@endif
