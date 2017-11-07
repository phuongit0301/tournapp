@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-42-img-container{
		position: relative;
	}
	#prototype-42-btn-1{
		width: 8%;
		height: 18px;
		background: none;
		position: absolute;
		top: 52%;
		left: 8%;
	}
	
	
</style>
<div id="prototype-42-img-container">
	<img src="{{ asset('/src/image/prototype/42-Draw.jpg')}}">
	<a href="{{url('/get_prototype?id=43')}}">
		<div id="prototype-42-btn-1"></div>
	</a>
</div>	
@endsection
