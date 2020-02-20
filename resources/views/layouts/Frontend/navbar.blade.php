<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
	    <h3><a class="navbar-brand" href="{{url('/')}}">Gitick</a></h3>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>

	    <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="{{url('/event')}}" class="nav-link">Event</a></li>
	          <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a class="nav-link">|</a></li>
                @if(Auth::check())
                    <li class="nav-item"><a href="#" class="nav-link">Masuk</a></li>
                @else
                    <li class="nav-item"><a href="{{url('/login')}}" class="nav-link">Login</a></li>
                @endif
	        </ul>
	    </div>
    </div>
</nav>
