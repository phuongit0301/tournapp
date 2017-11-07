@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-12-img-container{
		position: relative;
	}
	#prototype-12-btn-1{
		width: 10%;
		height: 50px;
		background: none;
		position: absolute;
		bottom: 28%;
		left: 38%;
	}
	
</style>
<div id="prototype-12-img-container">
	<img src="{{ asset('/src/image/prototype/12-rselect-class.jpg')}}">
	<a href="{{url('/get_prototype?id=13')}}">
		<div id="prototype-12-btn-1"></div>
	</a>
</div>
@endsection
