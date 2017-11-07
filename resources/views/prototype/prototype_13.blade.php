@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-13-img-container{
		position: relative;
	}
	#prototype-13-btn-1{
		width: 9%;
		height: 50px;
		background: none;
		position: absolute;
		bottom: 10%;
		left: 12%;
	}
	
</style>
<div id="prototype-13-img-container">
	<img src="{{ asset('/src/image/prototype/13-class-2.jpg')}}">
	<a href="{{url('/get_prototype?id=14')}}">
		<div id="prototype-13-btn-1"></div>
	</a>
</div>
@endsection
