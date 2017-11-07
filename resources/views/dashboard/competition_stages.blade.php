@extends ('layout.master')

@section('tournament-name')
NY State Open
@endsection

@section ('title')
Create Competition
@endsection

@section ('step-button')
<div class=" step-button-container">
  <div class="wrapper-menu-step">
    <ul class="menu-step-button">
      <li class="active"><a href="#">1. Set Up</a></li>
      <li class="active"><a href="#">2. Categories</a></li>
      <li class="active"><a href="#">3. Signup</a></li>
      <li class="active now"><a href="#">4. Stages</a></li>
      <li><a href="#">5. Draws</a></li>
      <li><a href="#">6. Session Planning</a></li>
      <li><a href="#">7. Session Managing</a></li>
    </ul>
  </div>
</div>
@endsection
@section ('content')
<div class="col-sm-12 col-md-12 col-lg-12 competition-stages-wrapper">

  <div class="form-group">
    <div class="col-sm-12 col-md-12 classifications">
      <label for="" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Classifications:</label>
      <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="juniors" type="radio" name="classifications">
          <label for="juniors" class="radio-custom-label">Juniors</label>
      </div>
      <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="seniors" type="radio" name="classifications">
          <label for="seniors" class="radio-custom-label">Seniors</label>
      </div>
      <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="handicaps" type="radio" name="classifications">
          <label for="handicaps" class="radio-custom-label">Handicaps</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12 col-md-12 categories">
      <label for="" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Categories:</label>
      <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="male" type="radio" name="categories">
          <label for="male" class="radio-custom-label">Male</label>
      </div>
      <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="female" type="radio" name="categories">
          <label for="female" class="radio-custom-label">Female</label>
      </div>
      <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="mixed" type="radio" name="categories">
          <label for="mixed" class="radio-custom-label">Mixed</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 col-md-12 categories2">
    <label for="" class="col-sm-2 col-md-2 col-lg-2 control-label text-left"></label>
      <div class="col-sm-2 col-md-2 col-lg-2 tournament-type-checkbox" >
        <input class="checkbox-custom" id="singles" type="checkbox" name="categories" >
        <label for="singles" class="checkbox-custom-label">Singles</label>
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2 tournament-type-checkbox" >
        <input class="checkbox-custom" id="doubles" type="checkbox" name="categories" >
        <label for="doubles" class="checkbox-custom-label">Doubles</label>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-12">
    <hr>
  </div>
  <div class="classifications-wrapper">
    <div class="col-sm-3 col-md-3 col-lg-3">
      <div class="form-group">
        <div class="col-sm-10 col-md-10 col-lg-10">
          <h2>JUNIORS</h2>
        </div>
      </div>  
    </div>
    <div class="col-sm-11 col-md-12 col-lg-11 drag-able-wrapper">
      <div class="drag-able-header">
        <p><img class="img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">Male Singles </p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 drag-zone" id=drag-zone>
        <div class="drag-box" draggnable = "true">
          <div class="box-header">
            <p>1. Pre Qualification</p>
            <span class="edit-group">
              <div class="dropdown">
                <img class="img-pencil-green" src="{{ asset('/src/image/stage-icon/pencil-green.png')}}">
                <div class="dropdown-content">
                  <a href="#" class="prepopulated">Prepopulated</a>
                  <a href="#" class="populated">Populated</a>
                  <a href="#" class="in-planning">In Planning</a>
                  <a href="#" class="finished">Finished</a>
                  <a href="#" class="playing selected">Playing</a>
                </div>
              </div>
              <img class="img-close-green" src="{{ asset('/src/image/stage-icon/close-green.png')}}">
            </span>
          </div>
          <div class="box-content">
            <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/round-robin.png')}}">
          </div>
        </div>
        <span class="arrow-icon"></span>
        <div class="drag-box" draggnable = "true">
          <div class="box-header">
            <p>2. Qualification</p>
            <span class="edit-group">
              <div class="dropdown">
                <img class="img-pencil-green" src="{{ asset('/src/image/stage-icon/pencil-green.png')}}">
                <div class="dropdown-content">
                  <a href="#" class="prepopulated">Prepopulated</a>
                  <a href="#" class="populated">Populated</a>
                  <a href="#" class="in-planning">In Planning</a>
                  <a href="#" class="finished">Finished</a>
                  <a href="#" class="playing selected">Playing</a>
                </div>
              </div>
              <img class="img-close-green" src="{{ asset('/src/image/stage-icon/close-green.png')}}">
            </span>
          </div>
          <div class="box-content">
            <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/knockout.png')}}">
          </div>
        </div>
        <span class="arrow-icon"></span>
        <div class="drag-box" draggnable = "true">
          <div class="box-header">
            <p>3. Main</p>
            <span class="edit-group">
              <div class="dropdown">
                <img class="img-pencil-green" src="{{ asset('/src/image/stage-icon/pencil-green.png')}}">
                <div class="dropdown-content">
                  <a href="#" class="prepopulated">Prepopulated</a>
                  <a href="#" class="populated">Populated</a>
                  <a href="#" class="in-planning">In Planning</a>
                  <a href="#" class="finished">Finished</a>
                  <a href="#" class="playing selected">Playing</a>
                </div>
              </div>
              <img class="img-close-green" src="{{ asset('/src/image/stage-icon/close-green.png')}}">
            </span>
          </div>
          <div class="box-content">
            <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/knockout.png')}}">
          </div>
        </div>
        
        <div class="add-box">
          <div class="box-content">
            <img class="img-plus btn-create-new-stage" src="{{ asset('/src/image/stage-icon/plus.png')}}">
            <p>Add New Stage</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-11 col-md-12 col-lg-11 drag-able-wrapper">
      <div class="drag-able-header">
        <p><img class="img-male" src="{{ asset('/src/image/category-icon/single-female.png')}}">Female Singles </p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 drag-zone" id=drag-zone>
        <div class="drag-box" draggnable = "true">
          <div class="box-header">
            <p>1. Pre Qualification</p>
            <span class="edit-group">
              <div class="dropdown">
                <img class="img-pencil-green" src="{{ asset('/src/image/stage-icon/pencil-green.png')}}">
                <div class="dropdown-content">
                  <a href="#" class="prepopulated">Prepopulated</a>
                  <a href="#" class="populated">Populated</a>
                  <a href="#" class="in-planning">In Planning</a>
                  <a href="#" class="finished">Finished</a>
                  <a href="#" class="playing selected">Playing</a>
                </div>
              </div>
              <img class="img-close-green" src="{{ asset('/src/image/stage-icon/close-green.png')}}">
            </span>
          </div>
          <div class="box-content">
            <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/round-robin.png')}}">
          </div>
        </div>
        <span class="arrow-icon"></span>
        <div class="drag-box" draggnable = "true">
          <div class="box-header">
            <p>2. Qualification</p>
            <span class="edit-group">
              <div class="dropdown">
                <img class="img-pencil-green" src="{{ asset('/src/image/stage-icon/pencil-green.png')}}">
                <div class="dropdown-content">
                  <a href="#" class="prepopulated">Prepopulated</a>
                  <a href="#" class="populated">Populated</a>
                  <a href="#" class="in-planning">In Planning</a>
                  <a href="#" class="finished">Finished</a>
                  <a href="#" class="playing selected">Playing</a>
                </div>
              </div>
              <img class="img-close-green" src="{{ asset('/src/image/stage-icon/close-green.png')}}">
            </span>
          </div>
          <div class="box-content">
            <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/knockout.png')}}">
          </div>
        </div>
        <span class="arrow-icon"></span>
        <div class="drag-box" draggnable = "true">
          <div class="box-header">
            <p>3. Main</p>
            <span class="edit-group">
              <div class="dropdown">
                <img class="img-pencil-green" src="{{ asset('/src/image/stage-icon/pencil-green.png')}}">
                <div class="dropdown-content">
                  <a href="#" class="prepopulated">Prepopulated</a>
                  <a href="#" class="populated">Populated</a>
                  <a href="#" class="in-planning">In Planning</a>
                  <a href="#" class="finished">Finished</a>
                  <a href="#" class="playing selected">Playing</a>
                </div>
              </div>
              <img class="img-close-green" src="{{ asset('/src/image/stage-icon/close-green.png')}}">
            </span>
          </div>
          <div class="box-content">
            <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/knockout.png')}}">
          </div>
        </div>
        
        <div class="add-box">
          <div class="box-content">
            <img class="img-plus btn-create-new-stage" src="{{ asset('/src/image/stage-icon/plus.png')}}">
            <p>Add New Stage</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <div class="col-sm-12 col-md-12 col-lg-12">
    <br>
  </div>
  <div class="classifications-wrapper">
    <div class="col-sm-3 col-md-3 col-lg-3">
      <div class="form-group">
        <div class="col-sm-10 col-md-10 col-lg-10">
          <h2>SENIORS</h2>
        </div>
      </div>  
    </div>
    <div class="col-sm-11 col-md-12 col-lg-11 drag-able-wrapper">
      <div class="drag-able-header">
        <p><img class="img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">Male Singles </p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 drag-zone" id=drag-zone>

        <div class="add-box">
          <div class="box-content">
            <img class="img-plus btn-create-new-stage" src="{{ asset('/src/image/stage-icon/plus.png')}}">
            <p>Add New Stage</p>
          </div>
        </div>
        <div class="copy-box">
          <div class="box-content">
            <div class="dropdown">
              <img class="img-copy" src="{{ asset('/src/image/stage-icon/copy.png')}}">
              <div class="dropdown-content">
                <span class="title">JUNIORS</span>
                <a href="#">Male Singles</a>
                <a href="#">Female Singles</a>
              </div>
            </div>
            <p>Copy Stages From</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="footer"> --}}
  <div class="col-sm-12 col-md-12 col-lg-12 footer form-group text-center">
    <button type="button" class="btn btn-cancel">Cancel</button>
    <button type="button" class="btn btn-save">Save</button>
  </div>
  {{-- </div> --}}
</div>

@endsection

@section ('modals')
<div id="newStageModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-medium">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CREATE NEW STAGE</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="club-name" class="col-sm-3 col-md-3 col-lg-3 control-label text-left">Stage Name:</label>
            <div class="col-sm-8 col-md-8 col-lg-8">
              <input type="text" class="form-control" id="club-name" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="club-email" class="col-sm-3 col-md-3 col-lg-3 control-label text-left">Type:</label>
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="col-sm-4 col-md-4 col-lg-4 type-wrapper left">
                <div class="form-group">
                  <input class="radio-custom" id="type-round-robin" type="radio" name="new_stage_type" >
                  <label for="type-round-robin" class="radio-custom-label">Round robin</label>  
                </div>
                <div class="form-group">
                  <img class="img-round-robin" src="{{ asset('/src/image/stage-icon/round-robin.png')}}">
                </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 type-wrapper right">
                <div class="form-group">
                  <input class="radio-custom" id="type-knockout" type="radio" name="new_stage_type" >
                  <label for="type-knockout" class="radio-custom-label">Knockout</label>  
                </div>
                <div class="form-group">
                  <img class="img-knockout" src="{{ asset('/src/image/stage-icon/knockout.png')}}">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="form-group text-center">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-green" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection
