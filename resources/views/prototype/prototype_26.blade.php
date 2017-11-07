@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-26-img-container{
		position: relative;
	}
	#prototype-26-btn-1{
		width: 5%;
		height: 29px;
		background: none;
		position: absolute;
		top: 46%;
		left: 24%
	}
	
</style>
<div id="prototype-26-img-container">
	<img src="{{ asset('/src/image/prototype/26-slide-fixed.jpg')}}">
	<a href="{{url('/get_prototype?id=25')}}">
		<div id="prototype-26-btn-1"></div>
	</a>
</div>
@endsection
