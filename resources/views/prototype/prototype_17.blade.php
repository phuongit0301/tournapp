@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-17-img-container{
		position: relative;
	}
	#prototype-17-btn-1{
		width: 10%;
		height: 50px;
		background: none;
		position: absolute;
		top: 68%;
		left: 27%;
	}
	
</style>
<div id="prototype-17-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New-Select-Gender.jpg')}}">
	<a href="{{url('/get_prototype?id=18')}}">
		<div id="prototype-17-btn-1"></div>
	</a>
</div>
@endsection
