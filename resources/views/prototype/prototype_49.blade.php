@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-49-img-container{
		position: relative;
	}
	#prototype-49-btn-1{
		width: 11%;
		height: 41px;
		background: none;
		position: absolute;
		top: 34%;
		left: 17%;
	}
	
	
</style>
<div id="prototype-49-img-container">
	<img src="{{ asset('/src/image/prototype/49-session.jpg')}}">
	<a href="{{url('/get_prototype?id=50')}}">
		<div id="prototype-49-btn-1"></div>
	</a>
</div>
@endsection
