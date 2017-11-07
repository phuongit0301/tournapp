@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-23-img-container{
		position: relative;
	}
	#prototype-23-btn-1{
		width: 3%;
		height: 44px;
		background: none;
		position: absolute;
		top: 16%;
		left: 4%;
	}
	
</style>
<div id="prototype-23-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New-View-Mode.jpg')}}">
	<a href="{{url('/get_prototype?id=22')}}">
		<div id="prototype-23-btn-1"></div>
	</a>
</div>
@endsection
