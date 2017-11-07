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
      <li class="active now"><a href="#">2. Categories</a></li>
      <li><a href="#">3. Signup</a></li>
      <li><a href="#">4. Stages</a></li>
      <li><a href="#">5. Draws</a></li>
      <li><a href="#">6. Session Planning</a></li>
      <li><a href="#">7. Session Managing</a></li>
    </ul>
  </div>
</div>
@endsection
@section ('content')
<div class="col-sm-12 col-md-12 col-lg-12 competition-category-chart">
  <div class="view-chart-type">
    <div class="switch">
      <input type="radio" class="switch-input" name="chart_type" value="chart" id="view_by_chart" checked>
      <label for="view_by_chart" class="switch-label switch-label-off"><img class="view-by-chart-img" src="{{url('src/image/category-icon/chart-type.png')}}"></label>
      <input type="radio" class="switch-input" name="chart_type" value="table" id="view_by_table">
      <label for="view_by_table" class="switch-label switch-label-on"><img class="view-by-table-img" src="{{url('src/image/category-icon/table-type.png')}}"></label>
      <span class="switch-selection"></span>
    </div>
  </div>
  <div class="col-md-12 chart-container">
    <div class="form-group">
      <div class="col-md-2 text-title">
        <label>Region:</label>
      </div>
      <div class="col-md-6 region">
        <div class="btn-group btn-group-justified " role="group" >
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default btn-region first active">Mass</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default btn-region ">Middle</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default btn-region last">Vermount</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div id="competition-type-dialog" class="col-md-4 dialog">
        <span class="close-thik"></span>
        <p>Please select competition type</p>
        <div class="col-md-12 ">
          <div class="col-md-6">
            <input class="checkbox-custom" id="single" type="checkbox" name="">
            <label for="single" class="checkbox-custom-label">Single</label>
          </div>
          <div class="col-md-6">
            <input class="checkbox-custom" id="double" type="checkbox" name="">
            <label for="double" class="checkbox-custom-label">Double</label>
          </div>
          
        </div>
        <div class="col-md-12 text-center">
          <button type="button" class="btn btn-white btn-close-dialog">Cancel</button>
          <button type="button" class="btn btn-green">Save</button>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div id="courtsize-dialog" class="col-md-8 dialog">
        <span class="close-thik"></span>
        <p>Please select Court size for this classification</p>
        <div class="col-md-6 court-image-container">
          <div class="col-md-2">
            <input class="checkbox-custom" id="full" type="checkbox" name="court_size">
            <label for="full" class="checkbox-custom-label"></label>
          </div>
          <div class="col-md-9">
            <img src="{{url('src/image/category-icon/court-icons/full-off.jpg')}}">
          </div>
        </div>
        <div class="col-md-6 court-image-container">
          <div class="col-md-2">
            <input class="checkbox-custom" id="mini-short" type="checkbox" name="court_size">
            <label for="mini-short" class="checkbox-custom-label"></label>
          </div>
          <div class="col-md-9">
            <img src="{{url('src/image/category-icon/court-icons/mini-short-off.jpg')}}">
          </div>
        </div>
        <div class="col-md-6 court-image-container">
          <div class="col-md-2">
            <input class="checkbox-custom" id="3/4" type="checkbox" name="court_size">
            <label for="3/4" class="checkbox-custom-label"></label>
          </div>
          <div class="col-md-9">
            <img src="{{url('src/image/category-icon/court-icons/3_4-off.jpg')}}">
          </div>
        </div>
        <div class="col-md-6 court-image-container">
          <div class="col-md-2">
            <input class="checkbox-custom" id="mini-long" type="checkbox" name="court_size">
            <label for="mini-long" class="checkbox-custom-label"></label>
          </div>
          <div class="col-md-9">
            <img src="{{url('src/image/category-icon/court-icons/mini-long-off.jpg')}}">
          </div>
        </div>
        <div class="col-md-6 court-image-container">
          <div class="col-md-2">
            <input class="checkbox-custom" id="mini-serve" type="checkbox" name="court_size">
            <label for="mini-serve" class="checkbox-custom-label"></label>
          </div>
          <div class="col-md-9">
            <img src="{{url('src/image/category-icon/court-icons/mini-serve-off.jpg')}}">
          </div>
        </div>
        <div class="col-md-12 text-center">
          <button type="button" class="btn btn-white btn-close-dialog">Cancel</button>
          <button type="button" class="btn btn-green">Save</button>
        </div>
      </div>
    </div>
    <div class="col-md-12"><hr></div>
    <div class="col-md-12">
      <div class="form-group">
        <div class="col-md-1 text-title">
          <div class="col-md-12 text-title">
            <label>Classification:</label>
          </div>
          <div class="col-md-12 text-title">
            <label>Court size:</label>
          </div>
        </div>

        <div class="col-md-11 classification" id="chart" style="width:80%;">
        </div>
        
      </div>
    </div>

  </div>
</div>

@endsection

@section ('modals')
<!-- Modal  -->
<div id="confirmModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REMOVE </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6 col-md-6 col-lg-6 by-age">
              <div id="" class="pannel">
              <img class="btn-check" src="{{ asset('/src/image/category-icon/check-round.png')}}">
                <div class="form-group input-calendar">
                  <label for="" class="">Min Age</label>
                  <input type="text" name="" id="" placeholder="dd/mm/yyyy">
                  <img class="icon-calendar-green" src="{{ asset('/src/image/category-icon/calendar-green.png')}}">
                </div>
                <div class="form-group input-calendar">
                  <label for="" class="">Max Age</label>
                  <input type="text" name="" id="" placeholder="dd/mm/yyyy">
                  <img class="icon-calendar-green" src="{{ asset('/src/image/category-icon/calendar-green.png')}}">
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 by-year">
             <div id="" class="pannel disabled">
             <img class="btn-check-none" src="{{ asset('/src/image/category-icon/check-none.png')}}">
                <div class="form-group">
                <label for="" class="">Min Year</label>
                  <select class="form-control">
                    <option>Choose Year</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="" class="">Max Year</label>
                  <select class="form-control ui">
                    <option>Choose Year</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <div class="form-group text-center">
          <button type="button" class="btn btn-green" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->
@endsection
