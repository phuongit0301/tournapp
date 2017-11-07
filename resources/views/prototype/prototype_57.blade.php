@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-57-img-container{
		position: relative;
	}
	#prototype-57-btn-1{
		width: 4%;
		height: 37px;
		background: none;
		position: absolute;
		bottom: 34%;
		left: 43%;
	}
	
	
</style>
<div id="prototype-57-img-container">
	<img src="{{ asset('/src/image/prototype/57-session-managment.jpg')}}">
	<a href="{{url('/get_prototype?id=54')}}">
		<div id="prototype-57-btn-1"></div>
	</a>
</div>
@endsection
