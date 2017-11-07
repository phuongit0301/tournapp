@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-41-img-container{
		position: relative;
	}
	#prototype-41-btn-1{
		width: 7%;
		height: 38px;
		background: none;
		position: absolute;
		top: 49%;
		right: 23%;
	}
	
	
</style>
<div id="prototype-41-img-container">
	<img src="{{ asset('/src/image/prototype/41-Draw.jpg')}}">
	<a href="{{url('/get_prototype?id=42')}}">
		<div id="prototype-41-btn-1"></div>
	</a>
</div>
@endsection
