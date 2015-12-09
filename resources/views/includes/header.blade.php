<nav id="MainMenu">
    <ul class="nav">
        @if(Auth::check())
            <li><a href="/">Home</a></li>
            <li><a href="/companies">Companies</a></li>
			<li><a href="/officers">Officers</a></li>
            <li><a href="/document_type">Documents Type</a></li>
            <li><a href="/logout">Log out</a></li>
<!--		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				{{ Auth::user()->name}} <span class="caret"></span>
			</a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="/logout">Logout</a></li>
			</ul>
		</li>-->
        @else
            <li><a href="/">Home</a></li>
            <li><a href="/login">Log in</a></li>
            <li><a href="/register">Register</a></li>
        @endif
    </ul>
</div>