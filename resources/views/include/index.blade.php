@include('include._begin')

<header>
	@include('include.navbar')
</header>

<main class="body slide">
	<?php
		if(Auth::user()->role_id=='2')
		{
	?>
			<aside class="sidebar show">@include('include.sidebar')</aside>
	
	<?php
		}
		if(Auth::user()->role_id=='4')
		{
	?>
			<aside class="sidebar show">@include('include.sidebar4')</aside>
	
	<?php
		}
	?>

	<div class="container-fluid solso-content">
	<div class="row">
		@yield('content')
	</div>
	</div>
</main>

@include('include._end')

@yield('scripts')