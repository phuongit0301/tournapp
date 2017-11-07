@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-19-img-container{
		position: relative;
	}
	#prototype-19-btn-1{
		width: 10%;
		height: 50px;
		background: none;
		position: absolute;
		bottom: 25%;
		left: 31%;
	}
	
</style>
<div id="prototype-19-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New-Select-Match-Type.jpg')}}">
	<a href="{{url('/get_prototype?id=20')}}">
		<div id="prototype-19-btn-1"></div>
	</a>
</div>
@endsection
