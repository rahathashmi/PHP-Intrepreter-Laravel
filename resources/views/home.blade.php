@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
					<ul class="nav navbar-nav">
					<li><a href="{{ url('user-codes') }}">View Codes</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="{{ url('php-ide') }}">Write Code</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
