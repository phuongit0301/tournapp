@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-14-img-container{
		position: relative;
	}
	#prototype-14-btn-1{
		width: 12%;
		height: 63px;
		background: none;
		position: absolute;
		top: 36%;
		left: 12%;
	}
	
</style>
<div id="prototype-14-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New.jpg')}}">
	<a href="{{url('/get_prototype?id=15')}}">
		<div id="prototype-14-btn-1"></div>
	</a>
</div>
@endsection
