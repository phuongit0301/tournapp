@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-15-img-container{
		position: relative;
	}
	#prototype-15-btn-1{
		width: 12%;
		height: 63px;
		background: none;
		position: absolute;
		bottom: 21%;
		left: 27%;
	}
	
</style>
<div id="prototype-15-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New-2.jpg')}}">
	<a href="{{url('/get_prototype?id=16')}}">
		<div id="prototype-15-btn-1"></div>
	</a>
</div>
@endsection
