@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-18-img-container{
		position: relative;
	}
	#prototype-18-btn-1{
		width: 12%;
		height: 52px;
		background: none;
		position: absolute;
		top: 55%;
		left: 20%;
	}
	
</style>
<div id="prototype-18-img-container">
	<img src="{{ asset('/src/image/prototype/slide-18.jpg')}}">
	<a href="{{url('/get_prototype?id=19')}}">
		<div id="prototype-18-btn-1"></div>
	</a>
</div>
@endsection
