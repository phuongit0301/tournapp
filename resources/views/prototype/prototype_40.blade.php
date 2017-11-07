@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-40-img-container{
		position: relative;
	}
	#prototype-40-btn-1{
		width: 8%;
		height: 38px;
		background: none;
		position: absolute;
		top: 49%;
		right: 30%;
	}
	#prototype-40-btn-2{
		width: 4%;
		height: 19px;
		background: none;
		position: absolute;
		bottom: 35%;
		right: 43%;
	}
	
	
</style>
<div id="prototype-40-img-container">
	<img src="{{ asset('/src/image/prototype/40-Draw.jpg')}}">
	<a href="{{url('/get_prototype?id=41')}}">
		<div id="prototype-40-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=105')}}">
		<div id="prototype-40-btn-2"></div>
	</a>
</div>
@endsection
