<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

<div class="container-fluid">
<div class="col-md-3">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
		</button>

		<div class="brand">
		
			<a type="submit" class="navbar-brand" href="{{url('home')}}"><span><i class="fa fa-home"></i>Home</span></a>
			<a class="toogle pull-right"><i class="fa fa-chevron-left"></i> </a>

		</div>		

	</div>
</div>
<div class="col-md-9">
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<div class="col-md-8">
			<ul class="nav navbar-nav">
				<li><a>COS-Cloud System</a></li>
			</ul>
		</div>
		<div class="col-md-2 navbar-brand">
			<p>
					<a href="{{url('admin/logout')}}" class="btn btn-primary btn-sm">Logout</a>
			</p>
		</div>
	</div>
</div>
</div>

</nav>
