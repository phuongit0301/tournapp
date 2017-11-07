@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-8-img-container{
		position: relative;
	}
	#prototype-8-btn-1{
		width: 3%;
		height: 50px;
		background: none;
		position: absolute;
		top: 36%;
		left: 55%;
	}
	
</style>
<div id="prototype-8-img-container">
	<img src="{{ asset('/src/image/prototype/8-new-region.jpg')}}">
	<a href="{{url('/get_prototype?id=7')}}">
		<div id="prototype-8-btn-1"></div>
	</a>
</div>
@endsection
