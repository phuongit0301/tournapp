@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-6-img-container{
		position: relative;
	}
	#prototype-6-btn-1{
		width: 15%;
		height: 55px;
		background: none;
		position: absolute;
		bottom: 34%;
		left: 12%;
	}
	
</style>
<div id="prototype-6-img-container">
	<img src="{{ asset('/src/image/prototype/slide-6-fixed.jpg')}}">
	<a href="{{url('/get_prototype?id=7')}}">
		<div id="prototype-6-btn-1"></div>
	</a>
</div>
@endsection
