@extends ('prototype.master')
@section ('content')


<style type="text/css">
	#prototype-52-img-container{
		position: relative;
	}
	#prototype-52-btn-1{
		width: 9%;
		height: 39px;
		background: none;
		position: absolute;
		bottom: 1%;
		left: 40%;
	}
	
	
</style>
<div id="prototype-52-img-container">
	<img src="{{ asset('/src/image/prototype/52-slide-session.jpg')}}">
	<a href="{{url('/get_prototype?id=53')}}">
		<div id="prototype-52-btn-1"></div>
	</a>
</div>
@endsection
