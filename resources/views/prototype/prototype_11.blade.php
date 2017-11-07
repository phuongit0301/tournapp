@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-11-img-container{
		position: relative;
	}
	#prototype-11-btn-1{
		width: 13%;
		height: 50px;
		background: none;
		position: absolute;
		bottom: 20%;
		left: 13%;
	}
	
</style>
<div id="prototype-11-img-container">
	<img src="{{ asset('/src/image/prototype/11-region-clubs.jpg')}}">
	<a href="{{url('/get_prototype?id=12')}}">
		<div id="prototype-11-btn-1"></div>
	</a>
</div>
@endsection
