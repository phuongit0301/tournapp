@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-35-img-container{
		position: relative;
	}
	#prototype-35-btn-1{
		width: 4%;
		height: 56px;
		background: none;
		position: absolute;
		top: 52%;
		left: 13%;
	}
	
</style>
<div id="prototype-35-img-container">
	<img src="{{ asset('/src/image/prototype/35-stages.jpg')}}">
	<a href="{{url('/get_prototype?id=36')}}">
		<div id="prototype-35-btn-1"></div>
	</a>
</div>
@endsection
