@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-55-img-container{
		position: relative;
	}
	#prototype-55-btn-1{
		width: 5%;
		height: 29px;
		background: none;
		position: absolute;
		bottom: 24%;
		left: 45%;
	}
	
	
</style>
<div id="prototype-55-img-container">
	<img src="{{ asset('/src/image/prototype/55-Session-Management.jpg')}}">
	<a href="{{url('/get_prototype?id=54')}}">
		<div id="prototype-55-btn-1"></div>
	</a>
</div>
@endsection
