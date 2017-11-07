@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-46-img-container{
		position: relative;
	}
	#prototype-46-btn-1{
		width: 8%;
		height: 40px;
		background: none;
		position: absolute;
		top: 59%;
		left: 4%;
	}
	
	
</style>
<div id="prototype-46-img-container">
	<img src="{{ asset('/src/image/prototype/46-creating-sessions.jpg')}}">
	<a href="{{url('/get_prototype?id=47')}}">
		<div id="prototype-46-btn-1"></div>
	</a>
</div>
@endsection
