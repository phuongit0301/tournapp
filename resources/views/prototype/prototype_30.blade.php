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
		top: 36%;
		left: 5%;
	}
	
</style>
<div id="prototype-30-img-container">
	<img src="{{ asset('/src/image/prototype/30-signup.jpg')}}">
	<a href="{{url('/get_prototype?id=65')}}">
		<div id="prototype-30-btn-1"></div>
	</a>
</div>
@endsection
