@extends('layouts.app')
@section('title', __('Home'))
@section('content')


<div id="Home">
	@include('Home')
</div>
<div id="About">
	@include('About')
</div>
<div id="Projects">
	@include('Projects')
</div>
<div id="Services">
	@include('Services')
</div>
<div id="Contact">
	@include('Contact')
</div>
@endsection