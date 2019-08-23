@extends('layouts.admin')

@section('Page Header', 'USERS')
@section('Optional description', 'Users administration ')


@section('content')

<table class="table">
	@if($users)
	<tr>
		<th>@lang('ID')</th>
		<th>@lang('Name')</th>
		<th>@lang('Email')</th>
		<th>@lang('Role')</th>
		<th>@lang('Actions')</th>
	</tr>
	@forelse($users as $user)
	<tr>
		{{-- 	{{dd($user)}} --}}
		<td> {{ $user->id}}</td>
		<td> {{ $user->name}}</td>
		<td> {{ $user->email}}</td>
		<td>
			@if($user->role == 'admin')
			<span class="badge badge-primary">{{ $user->role}}</span>
			@else
				@if($user->role == 'user')
					<span class="badge badge-primary">{{ $user->role}}</span>
				@endif
		@endif
		</td>
		<td>
			<a class="btn btn-primary" href="#" role="button">@lang('View')</a>
			<a class="btn btn-success" href="#" role="button">@lang('Edit')</a>
			<a class="btn btn-danger" href="#" role="button">@lang('Delete')</a>
		</td>
	</tr>
	@empty
	{{-- is empty --}}
	@endforelse
	@endif
	{{$users->links()}}
</table>

@endsection