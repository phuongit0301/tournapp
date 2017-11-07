@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-16-img-container{
		position: relative;
	}
	#prototype-16-btn-1{
		width: 14%;
		height: 103px;
		background: none;
		position: absolute;
		top: 43%;
		left: 10%;
	}
	
</style>
<div id="prototype-16-img-container">
	<img src="{{ asset('/src/image/prototype/slide-16.jpg')}}">
	<a href="{{url('/get_prototype?id=17')}}">
		<div id="prototype-16-btn-1"></div>
	</a>
</div>
@endsection
