@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-47-img-container{
		position: relative;
	}
	#prototype-47-btn-1{
		width: 10%;
		height: 61px;
		background: none;
		position: absolute;
		top: 54%;
		right: 50%;
	}
	
	
</style>
<div id="prototype-47-img-container">
	<img src="{{ asset('/src/image/prototype/47-playing-time-popup.jpg')}}">
	<a href="{{url('/get_prototype?id=48')}}">
		<div id="prototype-47-btn-1"></div>
	</a>
</div>
@endsection
