@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-28-img-container{
		position: relative;
	}
	#prototype-28-btn-1{
		width: 10%;
		height: 58px;
		background: none;
		position: absolute;
		bottom: 38%;
		left: 35%;
	}
	
</style>
<div id="prototype-28-img-container">
	<img src="{{ asset('/src/image/prototype/Signup.jpg')}}">
	<a href="{{url('/get_prototype?id=29')}}">
		<div id="prototype-28-btn-1"></div>
	</a>
</div>
@endsection
