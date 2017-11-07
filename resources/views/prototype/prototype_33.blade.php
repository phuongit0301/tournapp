@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-33-img-container{
		position: relative;
	}
	#prototype-33-btn-1{
		width: 13%;
		height: 65px;
		background: none;
		position: absolute;
		bottom: 6%;
		left: 40%;
	}
	
</style>
<div id="prototype-33-img-container">
	<img src="{{ asset('/src/image/prototype/33-signup-pay.jpg')}}">
	<a href="{{url('/get_prototype?id=34')}}">
		<div id="prototype-33-btn-1"></div>
	</a>
</div>
@endsection
