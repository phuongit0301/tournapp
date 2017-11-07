@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-32-img-container{
		position: relative;
	}
	#prototype-32-btn-1{
		width: 12%;
		height: 65px;
		background: none;
		position: absolute;
		bottom: 9%;
		left: 40%;
	}
	
</style>
<div id="prototype-32-img-container">
	<img src="{{ asset('/src/image/prototype/32-signup-products.jpg')}}">
	<a href="{{url('/get_prototype?id=33')}}">
		<div id="prototype-32-btn-1"></div>
	</a>
</div>
@endsection
