@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-56-img-container{
		position: relative;
	}
	#prototype-56-btn-1{
		width: 6%;
		height: 37px;
		background: none;
		position: absolute;
		bottom: 23%;
		left: 44%;
	}
	
	
</style>
<div id="prototype-56-img-container">
	<img src="{{ asset('/src/image/prototype/56-session-managment.jpg')}}">
	<a href="{{url('/get_prototype?id=53')}}">
		<div id="prototype-56-btn-1"></div>
	</a>
</div>
@endsection
