@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-22-img-container{
		position: relative;
	}
	#prototype-22-btn-1{
		width: 3%;
		height: 50px;
		background: none;
		position: absolute;
		top: 22%;
		left: 7%;
	}
	#prototype-22-btn-2{
		width: 3%;
		height: 30px;
		background: none;
		position: absolute;
		bottom: 26%;
		left: 16%;
	}
	
</style>
<div id="prototype-22-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New-Manage.jpg')}}">
	<a href="{{url('/get_prototype?id=23')}}">
		<div id="prototype-22-btn-1"></div>
	</a>
	<a href="{{url('/get_prototype?id=21')}}">
		<div id="prototype-22-btn-2"></div>
	</a>
</div>
@endsection
