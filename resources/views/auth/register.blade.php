@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading form-top">Register</div>
				<div class="panel-body" style="padding: 50px;">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Error! Input not correct<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" >
						</div>

						<div class="form-group">
							<input type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" >
						</div>

						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="password" >
						</div>

						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >
						</div>

						<div class="form-group">
                            <div class="role">
                                <label for="role">Admin</label>
                                <input type="checkbox" value="1" class="" name="role">
                            </div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">	Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
