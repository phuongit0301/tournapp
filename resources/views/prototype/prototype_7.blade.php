@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-7-img-container{
		position: relative;
	}
	#prototype-7-btn-1{
		    width: 11%;
    height: 50px;
    background: none;
    position: absolute;
    bottom: 22%;
    left: 17%;
	}
	#prototype-7-btn-2{
		width: 11%;
    height: 50px;
		background: none;
		position: absolute;
		bottom: 22%;
		left: 44%;
	}
	#prototype-7-btn-3{
		width: 11%;
    height: 50px;
		background: none;
		position: absolute;
		bottom: 22%;
		right: 29%;
	}
</style>

<div id="prototype-7-img-container">
	<img src="{{ asset('/src/image/prototype/7-region-and-clubs.jpg')}}">
	<a href="{{url('/get_prototype?id=8')}}">
		<div id="prototype-7-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=9')}}">
		<div id="prototype-7-btn-2"></div>
	</a>
	<a href="{{url('/get_prototype?id=11')}}">
		<div id="prototype-7-btn-3"></div>
	</a>
</div>

@endsection
