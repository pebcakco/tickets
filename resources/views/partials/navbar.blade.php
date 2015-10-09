<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><b>pebcak</b></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="/logout">Logout</a></li>
                @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>