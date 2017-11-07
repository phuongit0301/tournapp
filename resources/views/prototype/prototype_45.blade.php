@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-45-img-container{
		position: relative;
	}
	#prototype-45-btn-1{
		width: 9%;
		height: 53px;
		background: none;
		position: absolute;
		top: 36%;
		left: 40%;
	}
	
	
</style>
<div id="prototype-45-img-container">
	<img src="{{ asset('/src/image/prototype/45-create-session-popup.jpg')}}">
	<a href="{{url('/get_prototype?id=46')}}">
		<div id="prototype-45-btn-1"></div>
	</a>
</div>
@endsection
