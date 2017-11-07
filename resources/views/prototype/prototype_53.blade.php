@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-53-img-container{
		position: relative;
	}
	#prototype-53-btn-1{
		width: 5%;
		height: 26px;
		background: none;
		position: absolute;
		top: 31%;
		right: 46%;
	}
	#prototype-53-btn-2{
		width: 10%;
		height: 15px;
		background: none;
		position: absolute;
		top: 44%;
		right: 33%;
	}
	#prototype-53-btn-3{
		width: 5%;
		height: 19px;
		background: none;
		position: absolute;
		top: 39%;
		left: 19%;
	}
	#prototype-53-btn-4{
		width: 10%;
		height: 14px;
		background: none;
		position: absolute;
		top: 51%;
		right: 31%;
	}
	
</style>
<div id="prototype-53-img-container">
	<img src="{{ asset('/src/image/prototype/53-Session-Management.jpg')}}">
	<a href="{{url('/get_prototype?id=54')}}">
		<div id="prototype-53-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=55')}}">
		<div id="prototype-53-btn-2"></div>
	</a>
	<a href="{{url('/get_prototype?id=104')}}">
		<div id="prototype-53-btn-3"></div>
	</a>
	<a href="{{url('/get_prototype?id=108')}}">
		<div id="prototype-53-btn-4"></div>
	</a>
</div>
@endsection
