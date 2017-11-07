@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-38-img-container{
		position: relative;
	}
	#prototype-38-btn-1{
		width: 12%;
		height: 46px;
		background: none;
		position: absolute;
		bottom: 9%;
		right: 49%;
	}
	
	
</style>
<div id="prototype-38-img-container">
	<img src="{{ asset('/src/image/prototype/38-import-signup.jpg')}}">
	<a href="{{url('/get_prototype?id=39')}}">
		<div id="prototype-38-btn-1"></div>
	</a>
	
</div>
@endsection
