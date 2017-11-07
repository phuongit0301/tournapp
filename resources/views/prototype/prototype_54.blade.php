@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-54-img-container{
		position: relative;
	}
	#prototype-54-btn-1{
		width: 2%;
		height: 22px;
		background: none;
		position: absolute;
		top: 39%;
		left: 28%;
	}
	#prototype-54-btn-2{
		width: 5%;
		height: 15px;
		background: none;
		position: absolute;
		top: 45%;
		left: 19%;
	}
	#prototype-54-btn-3{
		width: 5%;
		height: 34px;
		background: none;
		position: absolute;
		top: 35%;
		right: 46%;
	}
	#prototype-54-btn-4{
		width: 10%;
		height: 14px;
		background: none;
		position: absolute;
		top: 50%;
		right: 33%;
	}
	#prototype-54-btn-5{
		width: 10%;
		height: 15px;
		background: none;
		position: absolute;
		top: 58%;
		right: 31%;
	}
</style>
<div id="prototype-54-img-container">
	<img src="{{ asset('/src/image/prototype/54-Session-Management.jpg')}}">
	<a href="{{url('/get_prototype?id=57')}}">
		<div id="prototype-54-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=107')}}">
		<div id="prototype-54-btn-2"></div>
	</a>
	<a href="{{url('/get_prototype?id=53')}}">
		<div id="prototype-54-btn-3"></div>
	</a>
	<a href="{{url('/get_prototype?id=106')}}">
		<div id="prototype-54-btn-4"></div>
	</a>
	<a href="{{url('/get_prototype?id=56')}}">
		<div id="prototype-54-btn-5"></div>
	</a>
</div>
@endsection
