@extends("admin.layouts.main")
@section("title", "dashboard")
@section("content")
	<div class="container-fluid m-5">
		<div class="row">
			<div class="col">
				<a href="{{ url('admin/users/show') }}">Users</a>
			</div>
		</div>
	</div>
@endsection