@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-25-img-container{
		position: relative;
	}
	#prototype-25-btn-1{
		width: 5%;
		height: 26px;
		background: none;
		position: absolute;
		top: 27%;
		left: 24%;
	}
	#prototype-25-btn-2{
		width: 2%;
		height: 28px;
		background: none;
		position: absolute;
		top: 38%;
		right: 51%;
	}
	#prototype-25-btn-3{
		width: 4%;
		height: 29px;
		background: none;
		position: absolute;
		top: 44%;
		right: 49%;
	}
	#prototype-25-btn-4{
		width: 8%;
		height: 29px;
		background: none;
		position: absolute;
		top: 44%;
		left: 13%;
	}
	#prototype-25-btn-5{
		width: 8%;
		height: 29px;
		background: none;
		position: absolute;
		top: 44%;
		left: 33%;
	}
	
</style>
<div id="prototype-25-img-container">
	<img src="{{ asset('/src/image/prototype/25-slide-fixed.jpg')}}">
	<a href="{{url('/get_prototype?id=27')}}">
		<div id="prototype-25-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=24')}}">
		<div id="prototype-25-btn-2"></div>
	</a>
	<a href="{{url('/get_prototype?id=26')}}">
		<div id="prototype-25-btn-3"></div>
	</a>
	<a href="{{url('/get_prototype?id=102')}}">
		<div id="prototype-25-btn-4"></div>
	</a>
	<a href="{{url('/get_prototype?id=103')}}">
		<div id="prototype-25-btn-5"></div>
	</a>
</div>
@endsection
