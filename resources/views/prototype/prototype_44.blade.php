@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-44-img-container{
		position: relative;
	}
	#prototype-44-btn-1{
		width: 4%;
		height: 62px;
		background: none;
		position: absolute;
		top: 23%;
		left: 23%;
	}
	
	
</style>
<div id="prototype-44-img-container">
	<img src="{{ asset('/src/image/prototype/44-session-planning.jpg')}}">
	<a href="{{url('/get_prototype?id=45')}}">
		<div id="prototype-44-btn-1"></div>
	</a>
</div>
@endsection
