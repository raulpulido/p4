<nav id="MainMenu">
			<ul class="nav">
				@if(Auth::check())
					<li><a href="/home">Home</a></li>
					<li><a href="/companies">Companies</a></li>
					<li><a href="/officers">Officers</a></li>
					<li><a href="/document_type">Documents Type</a></li>
					<li><a href="/logout">Log out : {{ $user->name }} </a></li>
				@else
					<li><a href="/">Home</a></li>
					<li><a href="/login">Log in</a></li>
					<li><a href="/register">Register</a></li>
				@endif
			</ul>
</nav>
