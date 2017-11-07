@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-37-img-container{
		position: relative;
	}
	#prototype-37-btn-1{
		width: 15%;
		height: 42px;
		background: none;
		position: absolute;
		top: 48%;
		right: 33%;
	}
	
</style>
<div id="prototype-37-img-container">
	<img src="{{ asset('/src/image/prototype/37-Draw.jpg')}}">
	<a href="{{url('/get_prototype?id=38')}}">
		<div id="prototype-37-btn-1"></div>
	</a>
</div>
@endsection
