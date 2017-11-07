@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-47-img-container{
		position: relative;
	}
	#prototype-47-btn-1{
		width: 11%;
		height: 100px;
		background: none;
		position: absolute;
		top: 21%;
		left: 4%;
	}
	
	
</style>
<div id="prototype-47-img-container">
	<img src="{{ asset('/src/image/prototype/48-session.jpg')}}">
	<a href="{{url('/get_prototype?id=49')}}">
		<div id="prototype-47-btn-1"></div>
	</a>
</div>
@endsection
