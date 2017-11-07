@extends ('prototype.master')
@section ('content')

<style type="text/css">
	#prototype-20-img-container{
		position: relative;
	}
	#prototype-20-btn-1{
		width: 11%;
		height: 87px;
		background: none;
		position: absolute;
		bottom: 25%;
		left: 12%;
	}
	
</style>
<div id="prototype-20-img-container">
	<img src="{{ asset('/src/image/prototype/Setup-Categories-New-Add-Category.jpg')}}">
	<a href="{{url('/get_prototype?id=21')}}">
		<div id="prototype-20-btn-1"></div>
	</a>
</div>
@endsection
