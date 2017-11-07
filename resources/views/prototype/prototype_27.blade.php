@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-27-img-container{
		position: relative;
	}
	#prototype-27-btn-1{
		width: 5%;
		height: 26px;
		background: none;
		position: absolute;
		top: 27%;
		left: 23%;
	}
	#prototype-27-btn-2{
		width: 2%;
		height: 26px;
		background: none;
		position: absolute;
		top: 38%;
		right: 51%;
	}
	#prototype-27-btn-3{
		width: 4%;
		height: 26px;
		background: none;
		position: absolute;
		top: 43%;
		right: 48%;
	}
	#prototype-27-btn-4{
		width: 4%;
		height: 26px;
		background: none;
		position: absolute;
		top: 27%;
		left: 10%;
	}
	
</style>
<div id="prototype-27-img-container">
	<img src="{{ asset('/src/image/prototype/27-signup-manage-doubles.jpg')}}">
	<a href="{{url('/get_prototype?id=27')}}">
		<div id="prototype-27-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=25')}}">
		<div id="prototype-27-btn-2"></div>
	</a>
	<a href="{{url('/get_prototype?id=26')}}">
		<div id="prototype-27-btn-3"></div>
	</a>
	<a href="{{url('/get_prototype?id=25')}}">
		<div id="prototype-27-btn-4"></div>
	</a>
</div>
@endsection
