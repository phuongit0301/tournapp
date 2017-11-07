@extends ('layout.master')

@section ('title')
Organization MANAGEMENT
@endsection

@section ('content')
<div class="col-sm-12 col-md-12 col-lg-12 organization-start">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 text-center">
			<img class="img-info" src="{{ asset('/src/image/organization-icon/icon-info.png')}}">
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<h3>PLEASE OPEN A NEW ORGANIZATION <br/> IN ORDER TO MANAGE YOUR COMPETITIONS AND MORE.</h3>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<button class="btn btn-green" id="btn-start-new-organization" data-href="{{URL::to('organization')}}">Start New Organization</button>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
@endsection
