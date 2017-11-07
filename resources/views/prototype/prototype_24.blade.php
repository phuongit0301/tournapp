@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-24-img-container{
		position: relative;
	}
	#prototype-24-btn-1{
		width: 4%;
		height: 32px;
		background: none;
		position: absolute;
		top: 27%;
		left: 24%;
	}
	#prototype-24-btn-2{
		width: 2%;
		height: 24px;
		background: none;
		position: absolute;
		top: 38%;
		right: 51%;
	}
	#prototype-24-btn-3{
		width: 8%;
		height: 20px;
		background: none;
		position: absolute;
		top: 44%;
		left: 33%;
	}
	#prototype-24-btn-4{
		width: 8%;
		height: 20px;
		background: none;
		position: absolute;
		top: 44%;
		left: 13%;
	}
	
</style>
<div id="prototype-24-img-container">
	<img src="{{ asset('/src/image/prototype/24-slide-fixed.jpg')}}">
	<a href="{{url('/get_prototype?id=27')}}">
		<div id="prototype-24-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=25')}}">
		<div id="prototype-24-btn-2"></div>
	</a>
	<a href="{{url('/get_prototype?id=10')}}">
		<div id="prototype-24-btn-3"></div>
	</a>
	<a href="{{url('/get_prototype?id=101')}}">
		<div id="prototype-24-btn-4"></div>
	</a>
</div>
@endsection
