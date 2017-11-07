@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-29-img-container{
		position: relative;
	}
	#prototype-29-btn-1{
		width: 12%;
		height: 58px;
		background: none;
		position: absolute;
		bottom: 6%;
		left: 34%;
	}
	
</style>
<div id="prototype-29-img-container">
	<img src="{{ asset('/src/image/prototype/slide-29.jpg')}}">
	<a href="{{url('/get_prototype?id=30')}}">
		<div id="prototype-29-btn-1"></div>
	</a>
</div>
@endsection
