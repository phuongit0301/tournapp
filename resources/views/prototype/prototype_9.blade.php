@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-9-img-container{
		position: relative;
	}
	#prototype-9-btn-1{
		width: 3%;
		height: 50px;
		background: none;
		position: absolute;
		top: 1%;
		right: 29%;
	}
	
</style>
<div id="prototype-9-img-container">
	<img src="{{ asset('/src/image/prototype/9-new-club.jpg')}}">
	<a href="{{url('/get_prototype?id=7')}}">
		<div id="prototype-9-btn-1"></div>
	</a>
</div>

@endsection
