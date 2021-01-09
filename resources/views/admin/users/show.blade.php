@extends("admin.layouts.main")
@section("title", "users")
@section("content")
	<div class="container-lg">	
		<div class="max-w-full m-4">
			<livewire:users-datatables exportable='true' searchable="firstname,lastname"/>
		</div>
	</div>
@endsection