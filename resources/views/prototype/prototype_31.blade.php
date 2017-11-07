@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-31-img-container{
		position: relative;
	}
	#prototype-31-btn-1{
		width: 12%;
		height: 65px;
		background: none;
		position: absolute;
		bottom: 6%;
		left: 40%;
	}
	
</style>
<div id="prototype-31-img-container">
	<img src="{{ asset('/src/image/prototype/31-Signup-Categories.jpg')}}">
	<a href="{{url('/get_prototype?id=32')}}">
		<div id="prototype-31-btn-1"></div>
	</a>
</div>
@endsection
