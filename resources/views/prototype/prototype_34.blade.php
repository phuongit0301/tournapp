@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-34-img-container{
		position: relative;
	}
	#prototype-34-btn-1{
		width: 12%;
		height: 65px;
		background: none;
		position: absolute;
		bottom: 19%;
		left: 34%;
	}
	
</style>
<div id="prototype-34-img-container">
	<img src="{{ asset('/src/image/prototype/Signup-Finish.jpg')}}">
	<a href="{{url('/get_prototype?id=2')}}">
		<div id="prototype-34-btn-1"></div>
	</a>
</div>
@endsection
