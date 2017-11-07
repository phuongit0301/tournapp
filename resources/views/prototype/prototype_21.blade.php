@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-21-img-container{
		position: relative;
	}
	#prototype-21-btn-1{
		width: 8%;
		height: 54px;
		background: none;
		position: absolute;
		bottom: 10%;
		left: 36%;
	}
	#prototype-21-btn-2{
		width: 3%;
		height: 40px;
		background: none;
		position: absolute;
		top: 6%;
		right: 30%;
	}
	
</style>
<div id="prototype-21-img-container">
	<img style="max-width: 72% !important" src="{{ asset('/src/image/prototype/Setup-Categories-New-View-Mode-2.jpg')}}">
	<a href="{{url('/get_prototype?id=22')}}">
		<div id="prototype-21-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=22')}}">
		<div id="prototype-21-btn-2"></div>
	</a>
</div>
@endsection
