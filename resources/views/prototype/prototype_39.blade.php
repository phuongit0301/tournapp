@extends ('prototype.master')
@section ('content')


<style type="text/css">
	#prototype-39-img-container{
		position: relative;
	}
	#prototype-39-btn-1{
		width: 13%;
		height: 36px;
		background: none;
		position: absolute;
		top: 46%;
		right: 40%;
	}
	#prototype-39-btn-2{	
		width: 3%;
		height: 34px;
		background: none;
		position: absolute;
		top: 46%;
		right: 29%;
	}
	
</style>
<div id="prototype-39-img-container">
	<img src="{{ asset('/src/image/prototype/39-Draw.jpg')}}">
	<a href="{{url('/get_prototype?id=38')}}">
		<div id="prototype-39-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=40')}}">
		<div id="prototype-39-btn-2"></div>
	</a>
</div>
@endsection
