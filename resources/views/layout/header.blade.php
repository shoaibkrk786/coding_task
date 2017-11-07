<div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @if(Auth::check())
                <li class="navbar-left"><a href="#">Home</a></li>
                <li class="navbar-left"><a href="{{route('data')}}">Questionairs</a></li>
                <li class="navbar-left"><a href="{{route('questionairs')}}">Result</a></li>

                <li class="navbar-right"><a href="#">Profile</a></li>
                <li class="navbar-right"><a href="{{route('logout')}}">Logout</a></li>
                @else
                    <li class="navbar-right"><a href="{{route('registration')}}">Registration</a></li>
                    <li class="navbar-right"><a href="{{route('login')}}">Login</a></li>
                 @endif
            </ul>
        </div>
    </nav>
</div>