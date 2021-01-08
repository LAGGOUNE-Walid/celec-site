@extends("admin.layouts.main")
@section("title", "users")
@section("content")
	<div class="container m-5">
		<div class="row">
			<div class="col">
				<a href="{{ url('admin/users/show') }}">Users</a>
			</div>
		</div>
	</div>
	<div class="max-w-full m-4">
		<livewire:users-datatables exclude="updated_at, id" dates="created_at, birthday" searchable="firstname, lastname, email" exportable='true'/>
		{{-- @livewire("users-datatables") --}}
	</div>
@endsection