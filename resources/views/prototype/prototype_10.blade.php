@extends ('prototype.master')
@section ('content')
<style type="text/css">
	#prototype-10-img-container{
		position: relative;
	}
	#prototype-10-btn-1{
		width: 10%;
		height: 50px;
		background: none;
		position: absolute;
		bottom: 16%;
		left: 53%;
	}
	
</style>
<div id="prototype-10-img-container">
	<img src="{{ asset('/src/image/prototype/Player-Management-2-PopupDetail.jpg')}}">
	<a href="{{url('/get_prototype?id=24')}}">
		<div id="prototype-10-btn-1"></div>
	</a>
</div>
@endsection
