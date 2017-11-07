@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-5-img-container{
		position: relative;
	}
	#prototype-5-btn-1{
		width: 20%;
		height: 101px;
		background: none;
		position: absolute;
		bottom: 10%;
		right: 18%;
	}
	
</style>
<div id="prototype-5-img-container">
	<img src="{{ asset('/src/image/prototype/Tournament-list.jpg')}}">
	<a href="{{url('/get_prototype?id=6')}}">
		<div id="prototype-5-btn-1"></div>
	</a>
</div>
@endsection
