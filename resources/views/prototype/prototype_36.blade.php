@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-36-img-container{
		position: relative;
	}
	#prototype-36-btn-1{
		width: 9%;
		height: 56px;
		background: none;
		position: absolute;
		bottom: 38%;
		right: 51%;
	}
	
</style>
<div id="prototype-36-img-container">
	<img src="{{ asset('/src/image/prototype/36-stages.jpg')}}">
	<a href="{{url('/get_prototype?id=67')}}">
		<div id="prototype-36-btn-1"></div>
	</a>
</div>
@endsection
