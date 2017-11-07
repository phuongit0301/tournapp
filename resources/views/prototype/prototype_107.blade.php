@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-43-img-container{
		position: relative;
	}
	#prototype-43-btn-1{
		width: 2%;
		height: 28px;
		background: none;
		position: absolute;
		top: 9%;
		right: 34%;
	}
	
	
</style>
<div id="prototype-43-img-container">
	<img src="{{ asset('/src/image/prototype/Player-Management-2-PlayerProfile.jpg')}}">
	<a href="{{url('/get_prototype?id=54')}}">
		<div id="prototype-43-btn-1"></div>
	</a>
</div>
@endsection
