@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-50-img-container{
		position: relative;
	}
	#prototype-50-btn-1{
		width: 9%;
		height: 43px;
		background: none;
		position: absolute;
		bottom: 1%;
		left: 41%;
	}
	
	
</style>
<div id="prototype-50-img-container">
	<img src="{{ asset('/src/image/prototype/50-session.jpg')}}">
	<a href="{{url('/get_prototype?id=51')}}">
		<div id="prototype-50-btn-1"></div>
	</a>
</div>
@endsection
