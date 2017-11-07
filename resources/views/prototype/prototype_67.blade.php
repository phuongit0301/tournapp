@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-30-img-container{
		position: relative;
	}
	#prototype-30-btn-1{
		width: 12%;
		height: 65px;
		background: none;
		position: absolute;
		bottom: 6%;
		left: 40%;
	}
	
</style>
<div id="prototype-30-img-container">
	<img src="{{ asset('/src/image/prototype/36-B-stages.jpg')}}">
	<a href="{{url('/get_prototype?id=31')}}">
		<div id="prototype-30-btn-1"></div>
	</a>
</div>
@endsection
