@extends ('prototype.master')

@section ('content')
<style type="text/css">
	#prototype-3-img-container{
		position: relative;
	}
	#prototype-3-btn-1{
		width: 19%;
		height: 100px;
		background: none;
		position: absolute;
		bottom: 27%;
		left: 31%;
	}
</style>
<div id="prototype-3-img-container">
	<img src="{{ asset('/src/image/prototype/Organisation-First-Time-Login.jpg')}}">
	<a href="{{url('/get_prototype?id=4')}}">
		<div id="prototype-3-btn-1"></div>
	</a>
</div>
@endsection
