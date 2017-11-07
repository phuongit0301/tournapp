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
<div class="col-sm-12 col-md-12 col-lg-12 competition-category-wrapper">
    <div class="form-group">
        <div class="area">
            <label for="" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Area:</label>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <input class="radio-custom" id="mass" type="radio" name="area">
                <label for="mass" class="radio-custom-label">Mass</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <input class="radio-custom" id="vermount" type="radio" name="area">
                <label for="vermount" class="radio-custom-label">Vermount</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <input class="radio-custom" id="nh" type="radio" name="area">
                <label for="nh" class="radio-custom-label">NH</label>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">
                <input class="radio-custom" id="not-specify" type="radio" name="area">
                <label for="not-specify" class="radio-custom-label">Not specify area</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="classifications">
            <label for="" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Classifications:</label>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <input class="checkbox-custom" id="juniors" type="checkbox" name="classifications">
                <label for="juniors" class="checkbox-custom-label">Juniors</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 ">
                <input class="checkbox-custom" id="seniors" type="checkbox" name="classifications">
                <label for="seniors" class="checkbox-custom-label">Seniors</label>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 ">
                <input class="checkbox-custom" id="handicaps" type="checkbox" name="classifications">
                <label for="handicaps" class="checkbox-custom-label">Handicaps</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="categories">
            <label for="" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Categories:</label>
            <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                <input class="checkbox-custom" id="singles" type="checkbox" name="categories">
                <label for="singles" class="checkbox-custom-label">Singles</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                <input class="checkbox-custom" id="doubles" type="checkbox" name="categories">
                <label for="doubles" class="checkbox-custom-label">Doubles</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                <input class="checkbox-custom" id="male" type="checkbox" name="categories">
                <label for="male" class="checkbox-custom-label">Male</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                <input class="checkbox-custom" id="female" type="checkbox" name="categories">
                <label for="female" class="checkbox-custom-label">Female</label>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                <input class="checkbox-custom" id="mixed" type="checkbox" name="categories">
                <label for="mixed" class="checkbox-custom-label">Mixed</label>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <hr>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="form-group">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <h2>JUNIORS</h2>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div id="table-scroll" class="table-category-wrapper ">
            <table class="table table-striped" id="junior-table">
                <tr>
                    <td class="header-row-1" rowspan="2">CATEGORY NAME</td>
                    <td class="header-row-1 bottom-normal" colspan="3">BASIC INFO</td>
                    <td class="header-row-1 hide-able" rowspan="2" id="level-header">
                        <div class="dropdown-hide">
                            <div class="hide-able-icon">LEVEL</div>
                            <div class="dropdown-hide-content">
                                <a class="hide-column td-level">Hide Column</a>
                            </div>
                        </div>
                    </td>
                    <td class="header-row-1 hide-able" rowspan="2" id="level-header">
                        <div class="dropdown-hide">
                        <div class="hide-able-icon">AGE LIMITS</div>
                            <div class="dropdown-hide-content">
                                <a class="hide-column td-age-limit">Hide Column</a>
                            </div>
                        </div>
                        <div class="switch">
                            <span id="switch-by-age-1" class="btn-left active">By Age</span>
                            <span id="switch-by-year-1" class="btn-right">By Year</span>
                        </div>
                    </td>
                    <td class="header-row-1 hide-able" rowspan="2">
                        <div class="dropdown-hide">
                        <div class="hide-able-icon">RANKING LIMITS</div>
                            <div class="dropdown-hide-content">
                                <a class="hide-column td-ranking-limit">Hide Column</a>
                            </div>
                        </div>
                    </td>
                    <td class="header-row-1 hide-able" rowspan="2">
                        <div class="dropdown-hide">
                        <div class="hide-able-icon">LOCATIONS</div>
                            <div class="dropdown-hide-content">
                                <a class="hide-column td-location">Hide Column</a>
                            </div>
                        </div>
                    </td>
                    <td class="header-row-1 hide-able" rowspan="2">
                        <div class="dropdown-hide">
                        <div class="hide-able-icon">DATES</div>
                            <div class="dropdown-hide-content">
                                <a class="hide-column td-date">Hide Column</a>
                            </div>
                        </div>
                    </td>
                    <td class="header-row-1 hide-able" rowspan="2">
                        <div class="dropdown-hide">
                        <div class="hide-able-icon">PRICE</div>
                            <div class="dropdown-hide-content">
                                <a class="hide-column td-price">Hide Column</a>
                            </div>
                        </div>
                    </td>
                    <td class="header-row-1 hide-able" rowspan="2">
                        <div class="dropdown">
                            <span class="btn-add-function">Add Function</span>
                            <div class="dropdown-content">
                                <a href="#">Age Limits</a>
                                <a href="#">Ranking Limits</a>
                                <a href="#">Locations</a>
                                <a href="#">Dates</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="header-row-2">COURT SIZE &nbsp;<span class="required-icon">*</span></td>
                    <td class="header-row-2">BALL TYPE &nbsp;<span class="required-icon">*</span></td>
                    <td class="header-row-2">COURT SURFACE &nbsp;<span class="required-icon">*</span></td>
                </tr>
                <tr>
                    <td class="td-category-name">
                        <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                            <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                <span>SINGLES</span>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-1-male" type="radio" name="category_name_1">
                                <label for="juniors-1-male" class="radio-custom-label">
                                    <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                    <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}"> Male
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-1-female" type="radio" name="category_name_1">
                                <label for="juniors-1-female" class="radio-custom-label">
                                    <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                    <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Female
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-1-mixed" type="radio" name="category_name_1">
                                <label for="juniors-1-mixed" class="radio-custom-label">
                                    <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                    <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}">
                                    <span class="single-mixed-line">|</span>
                                    <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                    <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Mixed
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                            <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                <span>DOUBLES</span>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-2-dbmale" type="radio" name="category_name_2">
                                <label for="juniors-2-dbmale" class="radio-custom-label">
                                    <img class="img-black img-double-male" src="{{ asset('/src/image/category-icon/double-male.png')}}">
                                    <img class="img-green img-double-male" src="{{ asset('/src/image/category-icon/double-male-green.png')}}"> Male
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-2-dbfemale" type="radio" name="category_name_2">
                                <label for="juniors-2-dbfemale" class="radio-custom-label">
                                    <img class="img-black img-double-female" src="{{ asset('/src/image/category-icon/double-female.png')}}">
                                    <img class="img-green img-double-female" src="{{ asset('/src/image/category-icon/double-female-green.png')}}">Female</label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-2-dbmixed" type="radio" name="category_name_2">
                                <label for="juniors-2-dbmixed" class="radio-custom-label">
                                    <img class="img-black img-mixed" src="{{ asset('/src/image/category-icon/mixed.png')}}">
                                    <img class="img-green img-mixed" src="{{ asset('/src/image/category-icon/mixed-green.png')}}"> Mixed
                                </label>
                            </div>
                        </div>
                        <input class="edit-category-name" type="text" id="edit-category-name-1" name="" value="Male Singles">
                        <label for="edit-category-name-1"><img class="img-pencil-round" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></label>
                    </td>
                    <td class="td-court-size">
                        <select class="form-control ui dropdown">
                            <option>Mini Tennis</option>
                            <option>Mini Tennis</option>
                        </select>
                    </td>
                    <td class="td-ball-type">
                        <select class="form-control ui dropdown">
                            <option>Red ball 25%</option>
                            <option>Red ball 25%</option>
                        </select>
                    </td>
                    <td class="td-court-surface">
                        <select class="form-control ui dropdown">
                            <option>Grass</option>
                            <option>Grass</option>
                        </select>
                    </td>
                    <td class="td-level">
                        <select class="form-control ui dropdown">
                            <option>NTRP - lvl 1.0</option>
                            <option>NTRP - lvl 1.0</option>
                        </select>
                        <p>or</p>
                        <br/>
                        <span class="add-new-level-span">add new level</span>
                        <a class="add-new-level-link"><img class="img-plus-round" id="xx" src="{{ asset('/src/image/category-icon/plus-round.png')}}"></a>
                    </td>
                    <td class="td-age-limit" id="age-limit-content">
                        <div id="panel-by-age-1" class="pannel panel-by-age">
                            <div class="form-group">
                                <p>By Age <img class="btn-edit-age" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            </div>
                            <div class="form-group input-calendar">
                                <label for="from1" class="label-from">From:</label>
                                <input type="text" name="" id="from1" placeholder="dd/mm/yyyy">
                                
                            </div>
                            <div class="form-group input-calendar">
                                <label for="from1" class="label-to">To:</label>
                                <input type="text" name="" id="from1" placeholder="dd/mm/yyyy">
                                
                            </div>
                        </div>
                    </td>
                    <td class="td-ranking-limit">
                        <div class="pannel panel-ranking-limit">
                            <div class="form-group panel-ranking-header">
                                <img class="img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                <p><img class="btn-edit-ranking" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-type">Type:</label>
                                <input type="text" name="" id="" value="">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-range">Range:</label>
                                <input type="text" name="" id="" placeholder="">
                            </div>
                        </div>
                    </td>
                    <td class="td-location">
                        <select class="form-control ui dropdown">
                            <option>Select a Club / Venue here</option>
                            <option>Location 1</option>
                        </select>
                    </td>
                    <td class="td-date">
                    </td>
                    <td class="td-price">
                        <div class="pannel panel-price-free">
                            <p><img class="btn-edit-price" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            <div class="form-group">
                                <label for="" class="label-fee">Registration fees:
                                </label>
                                <input type="text" name="" id="" value="">
                            </div>
                        </div>
                    </td>
                    <td class="td-add-function">
                        <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}">Delete</span>
                        <span class="btn-clone"><img class="img-clone" src="{{ asset('/src/image/category-icon/clone.png')}}">Clone this Category</span>
                    </td>
                </tr>
                <tr>
                    <td class="td-category-name">
                        <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                            <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                <span>SINGLES</span>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-3-male" type="radio" name="category_name_3">
                                <label for="juniors-3-male" class="radio-custom-label">
                                    <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                    <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}"> Male
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-3-female" type="radio" name="category_name_3">
                                <label for="juniors-3-female" class="radio-custom-label">
                                    <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                    <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Female
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-3-mixed" type="radio" name="category_name_3">
                                <label for="juniors-3-mixed" class="radio-custom-label">
                                    <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                    <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}">
                                    <span class="single-mixed-line">|</span>
                                    <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                    <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Mixed
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                            <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                <span>DOUBLES</span>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-3-dbmale" type="radio" name="category_name_4">
                                <label for="juniors-3-dbmale" class="radio-custom-label">
                                    <img class="img-black img-double-male" src="{{ asset('/src/image/category-icon/double-male.png')}}">
                                    <img class="img-green img-double-male" src="{{ asset('/src/image/category-icon/double-male-green.png')}}"> Male
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-3-dbfemale" type="radio" name="category_name_4">
                                <label for="juniors-3-dbfemale" class="radio-custom-label">
                                    <img class="img-black img-double-female" src="{{ asset('/src/image/category-icon/double-female.png')}}">
                                    <img class="img-green img-double-female" src="{{ asset('/src/image/category-icon/double-female-green.png')}}">Female</label>
                            </div>
                            <div class="form-group">
                                <input class="radio-custom" id="juniors-3-dbmixed" type="radio" name="category_name_4">
                                <label for="juniors-3-dbmixed" class="radio-custom-label">
                                    <img class="img-black img-mixed" src="{{ asset('/src/image/category-icon/mixed.png')}}">
                                    <img class="img-green img-mixed" src="{{ asset('/src/image/category-icon/mixed-green.png')}}"> Mixed
                                </label>
                            </div>
                        </div>
                        <input class="edit-category-name" type="text" id="edit-category-name-1" name="" value="Male Singles">
                        <label for="edit-category-name-1"><img class="img-pencil-round" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></label>
                    </td>
                    <td class="td-court-size">
                        <select class="form-control ui dropdown">
                            <option>Mini Tennis</option>
                            <option>Mini Tennis</option>
                        </select>
                    </td>
                    <td class="td-ball-type">
                        <select class="form-control ui dropdown">
                            <option>Red ball 25%</option>
                            <option>Red ball 25%</option>
                        </select>
                    </td>
                    <td class="td-court-surface">
                        <select class="form-control ui dropdown">
                            <option>Grass</option>
                            <option>Grass</option>
                        </select>
                    </td>
                    <td class="td-level">
                        <select class="form-control ui dropdown">
                            <option class="disabled item">ITN</option>
                            <option class="item" >- Level 1.0</option>
                            <option class="item">- Level 2.0</option>
                            <option class="disabled item"  >NTRP</option>
                            <option class="item">- Level 1.0</option>
                            <option class="item">- Level 2.0</option>
                            <option class="item">- Level 3.0</option>
                            <option class="item">- Level 4.0</option>
                        </select>
                        {{-- <div class="ui dropdown">
                           <i class="dropdown icon"></i>
                             <div class="menu">
                                <div class="disabled item">ITN</div>
                                <div class="item">- Level 1.0</div>
                                <div class="item">- Level 2.0</div>
                                <div class="disabled item">NTRP</div>
                                <div class="item">- Level 1.0</div>
                                <div class="item">- Level 2.0</div>
                                <div class="item">- Level 3.0</div>
                                <div class="item">- Level 4.0</div>
                            </div>
                        </div> --}}
                    <p>or</p>

                    <br/>
                    <span class="add-new-level-span">add new level</span>
                    <a class="add-new-level-link"><img class="img-plus-round" src="{{ asset('/src/image/category-icon/plus-round.png')}}"></a>
                </td>
                    <td class="td-age-limit" id="age-limit-content">
                        <div id="panel-by-age-1" class="pannel panel-by-year">
                            <div class="form-group">
                                <p>By Year <img class="btn-edit-age" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            </div>
                            <div class="form-group">
                                <label for="from1" class="label-from">From:</label>
                                <input type="text" name="" id="from1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="from1" class="label-to">To:</label>
                                <input type="text" name="" id="from1" placeholder="">
                            </div>
                        </div>
                    </td>
                    <td class="td-ranking-limit">
                        <div class="pannel panel-ranking-limit">
                            <div class="form-group panel-ranking-header">
                                <img class="img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                <p><img class="btn-edit-ranking" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-type">Type:</label>
                                <input type="text" name="" id="" value="ATP">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-range">Range:</label>
                                <input type="text" name="" id="" placeholder="">
                            </div>
                        </div>
                        <div class="pannel panel-ranking-limit">
                            <div class="form-group panel-ranking-header">
                                <img class="img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                <p><img class="" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-type">Type:</label>
                                <input type="text" name="" id="" value="ATP">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-range">Range:</label>
                                <input type="text" name="" id="" placeholder="">
                            </div>
                        </div>
                        <div class="pannel panel-ranking-limit">
                            <div class="form-group panel-ranking-header">
                                <img class="img-double-female" src="{{ asset('/src/image/category-icon/double-female.png')}}">
                                <p><img class="" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-type">Type:</label>
                                <input type="text" name="" id="" value="ATP">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-range">Range:</label>
                                <input type="text" name="" id="" placeholder="">
                            </div>
                        </div>
                    </td>
                    <td class="td-location">
                        <select class="form-control ui dropdown">
                            <option>Select a Club / Venue here</option>
                            <option>Location 1</option>
                        </select>
                    </td>
                    <td class="td-date">
                        <div class="panel-date">
                            <p>GAMES</p>
                            <div class="form-group input-calendar">
                                <label>Start</label>
                                <input type="" name="" placeholder="dd/mm/yyyy">
                                <img class="icon-calendar" src="{{ asset('/src/image/category-icon/calendar.png')}}">
                            </div>
                            <div class="form-group input-calendar">
                                <label>End</label>
                                <input type="" name="" placeholder="dd/mm/yyyy">
                                <img class="icon-calendar" src="{{ asset('/src/image/category-icon/calendar.png')}}">
                            </div>
                        </div>
                        <div class="panel-date">
                            <p>REGISTRATION</p>
                            <div class="form-group input-calendar">
                                <label>Start</label>
                                <input type="" name="" placeholder="dd/mm/yyyy">
                                <img class="icon-calendar" src="{{ asset('/src/image/category-icon/calendar.png')}}">
                            </div>
                            <div class="form-group input-calendar">
                                <label>End</label>
                                <input type="" name="" placeholder="dd/mm/yyyy">
                                <img class="icon-calendar" src="{{ asset('/src/image/category-icon/calendar.png')}}">
                            </div>
                        </div>
                        <div class="panel-date">
                            <p>DRAW</p>
                            <div class="form-group input-calendar">
                                <label>Start</label>
                                <input type="" name="" placeholder="dd/mm/yyyy">
                                <img class="icon-calendar" src="{{ asset('/src/image/category-icon/calendar.png')}}">
                            </div>
                            <div class="form-group input-calendar">
                                <label>End</label>
                                <input type="" name="" placeholder="dd/mm/yyyy">
                                <img class="icon-calendar" src="{{ asset('/src/image/category-icon/calendar.png')}}">
                            </div>
                        </div>
                        <div class="registration-status">
                            <p>REGISTRATION STATUS</p>
                            <div class="switch">
                                <span id="" class="btn-left btn-open active">Open</span>
                                <span id="" class="btn-right btn-close">Close</span>
                            </div>
                            <div class="switch">
                                <span id="" class="btn-left btn-manual active">Manual</span>
                                <span id="" class="btn-right btn-auto">Auto</span>
                            </div>
                        </div>
                    </td>
                    <td class="td-price">
                        <div class="pannel panel-price-fee">
                            <p><img class="btn-edit-price" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                            <div class="form-group">
                                <label for="" class="label-fee">Registration fees:
                                </label>
                                <select class="form-control" id="">
                                    <option>USD</option>
                                    <option>USD</option>
                                </select>
                                <input type="text" name="" id="" value="">
                            </div>
                            <div class="form-group">
                                <label for="note" class="label-fee">Notes:</label>
                                <textarea class="form-control" rows="4" id="note"></textarea>
                           </div>
                       </div>
                    </td>
                    <td class="td-add-function">
                        <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}">Delete</span>
                        <span class="btn-clone"><img class="img-clone" src="{{ asset('/src/image/category-icon/clone.png')}}">Clone this Category</span>
                    </td>
                </tr>
                <tr>
                    <td class="td-category-name">
                        
                    </td>
                    <td class="td-court-size">
                        
                    </td>
                    <td class="td-ball-type">
                        
                    </td>
                    <td class="td-court-surface">
                        
                    </td>
                    <td class="td-level">
                        
                    </td>
                    <td class="td-age-limit" id="age-limit-content">
                        
                    </td>
                    <td class="td-ranking-limit">
                        
                    </td>
                    <td class="td-location">
                        
                    </td>
                    <td class="td-date">
                        
                    </td>
                    <td class="td-price">
                    </td>
                    <td class="td-add-function">
                        <span class="btn-new-category">New Category</span>
                    </td>
                </tr>
            </table>
        </div> 
        <!-- Senior table -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <hr>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <div class="col-sm-10 col-md-10 col-lg-10">
                    <h2>SENIORS</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div id="table-scroll2" class="table-category-wrapper">
                <table class="table table-striped" id="senior-table">
                    <tr>
                        <td class="header-row-1" rowspan="2">CATEGORY NAME</td>
                        <td class="header-row-1 bottom-normal" colspan="3">BASIC INFO</td>
                        <td class="header-row-1 hide-able" rowspan="2" id="level-header">
                            <div class="hide-able-icon">LEVEL</div>
                        </td>
                        <td class="header-row-1 hide-able hide" rowspan="2" id="level-header">
                            AGE LIMITS
                            <br/>
                            <div class="switch">
                                <span id="switch-by-age-1" class="btn-left active">By Age</span>
                                <span id="switch-by-year-1" class="btn-right">By Year</span>
                            </div>
                        </td>
                        <td class="header-row-1 hide-able hide" rowspan="2">
                            <div class="hide-able-icon">RANKING LIMITS</div>
                        </td>
                        <td class="header-row-1 hide-able hide" rowspan="2">
                            <div class="hide-able-icon">LOCATIONS</div>
                        </td>
                        <td class="header-row-1 hide-able hide" rowspan="2">
                            <div class="hide-able-icon">DATES</div>
                        </td>
                        <td class="header-row-1 hide-able hide" rowspan="2">
                            <div class="hide-able-icon">PRICE</div>
                        </td>
                        <td class="header-row-1" rowspan="2">
                            <div class="dropdown">
                                <span class="btn-add-function">Add Function</span>
                                <div class="dropdown-content">
                                    <a href="#">Age Limits</a>
                                    <a href="#">Ranking Limits</a>
                                    <a href="#">Locations</a>
                                    <a href="#">Dates</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="header-row-2">COURT SIZE &nbsp;<span class="required-icon">*</span></td>
                        <td class="header-row-2">BALL TYPE &nbsp;<span class="required-icon">*</span></td>
                        <td class="header-row-2">COURT SURFACE &nbsp;<span class="required-icon">*</span></td>
                    </tr>
                    <tr>
                        <td class="td-category-name">
                            <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                    <span>SINGLES</span>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-1-male" type="radio" name="category_name_5">
                                    <label for="seniors-1-male" class="radio-custom-label">
                                        <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                        <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}"> Male
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-1-female" type="radio" name="category_name_5">
                                    <label for="seniors-1-female" class="radio-custom-label">
                                        <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                        <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-1-mixed" type="radio" name="category_name_5">
                                    <label for="seniors-1-mixed" class="radio-custom-label">
                                        <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                        <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}">
                                        <span class="single-mixed-line">|</span>
                                        <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                        <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Mixed
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                    <span>DOUBLES</span>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-1-dbmale" type="radio" name="category_name_6">
                                    <label for="seniors-1-dbmale" class="radio-custom-label">
                                        <img class="img-black img-double-male" src="{{ asset('/src/image/category-icon/double-male.png')}}">
                                        <img class="img-green img-double-male" src="{{ asset('/src/image/category-icon/double-male-green.png')}}"> Male
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-1-dbfemale" type="radio" name="category_name_6">
                                    <label for="seniors-1-dbfemale" class="radio-custom-label">
                                        <img class="img-black img-double-female" src="{{ asset('/src/image/category-icon/double-female.png')}}">
                                        <img class="img-green img-double-female" src="{{ asset('/src/image/category-icon/double-female-green.png')}}"> Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-1-dbmixed" type="radio" name="category_name_6">
                                    <label for="seniors-1-dbmixed" class="radio-custom-label">
                                        <img class="img-black img-mixed" src="{{ asset('/src/image/category-icon/mixed.png')}}">
                                        <img class="img-green img-mixed" src="{{ asset('/src/image/category-icon/mixed-green.png')}}"> Mixed
                                    </label>
                                </div>
                            </div>
                            <input class="edit-category-name" type="text" id="edit-category-name-1" name="" value="Male Singles">
                            <label for="edit-category-name-1"><img class="img-pencil-round" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></label>
                        </td>
                        <td class="td-court-size">
                            <select class="form-control ui dropdown">
                                <option>Mini Tennis</option>
                                <option>Mini Tennis</option>
                            </select>
                        </td>
                        <td class="td-ball-type">
                            <select class="form-control ui dropdown">
                                <option>Red ball 25%</option>
                                <option>Red ball 25%</option>
                            </select>
                        </td>
                        <td class="td-court-surface">
                            <select class="form-control ui dropdown">
                                <option>Grass</option>
                                <option>Grass</option>
                            </select>
                        </td>
                        <td class="td-level">
                            <select class="form-control ui dropdown">
                                <option>NTRP - lvl 1.0</option>
                                <option>NTRP - lvl 1.0</option>
                            </select>
                            <p>or</p>
                            <br/>
                            <span class="add-new-level-span">add new level</span>
                            <a class="add-new-level-link"><img class="img-plus-round" src="{{ asset('/src/image/category-icon/plus-round.png')}}"></a>
                        </td>
                        <td class="td-age-limit hide" id="age-limit-content">
                            <div id="panel-by-age-1" class="pannel panel-by-age">
                                <div class="form-group">
                                    <p>By Age <img class="btn-edit-age" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                                </div>
                                <div class="form-group">
                                    <label for="from1" class="label-from">From:</label>
                                    <input type="text" name="" id="from1" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="form-group">
                                    <label for="from1" class="label-to">To:</label>
                                    <input type="text" name="" id="from1" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                        </td>
                        <td class="td-ranking-limit hide">
                            <div class="pannel panel-ranking-limit">
                                <div class="form-group panel-ranking-header">
                                    <img class="img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                    <p><img class="btn-edit-ranking" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-type">Type:</label>
                                    <input type="text" name="" id="" value="">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-range">Range:</label>
                                    <input type="text" name="" id="" placeholder="">
                                </div>
                            </div>
                        </td>
                        <td class="td-location hide">
                            <select class="form-control ui dropdown">
                                <option>Select a Club / Venue here</option>
                                <option>Location 1</option>
                            </select>
                        </td>
                        <td class="td-date hide">
                        </td>
                        <td class="td-price hide">
                            <div class="pannel panel-price-free">
                                <p><img class="btn-edit-price" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                                <div class="form-group">
                                    <label for="" class="label-fee">Registration fees:
                                    </label>
                                    <input type="text" name="" id="" value="">
                                </div>
                            </div>
                        </td>
                        <td class="td-add-function">
                            <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}">Delete</span>
                            <span class="btn-clone"><img class="img-clone" src="{{ asset('/src/image/category-icon/clone.png')}}">Clone this Category</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-category-name">
                            <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                    <span>SINGLES</span>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-2-male" type="radio" name="category_name_3">
                                    <label for="seniors-2-male" class="radio-custom-label">
                                        <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                        <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}"> Male
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-2-female" type="radio" name="category_name_3">
                                    <label for="seniors-2-female" class="radio-custom-label">
                                        <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                        <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-2-mixed" type="radio" name="category_name_3">
                                    <label for="seniors-2-mixed" class="radio-custom-label">
                                        <img class="img-black img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                        <img class="img-green img-male" src="{{ asset('/src/image/category-icon/single-male-green.png')}}">
                                        <span class="single-mixed-line">|</span>
                                        <img class="img-black img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                        <img class="img-green img-female" src="{{ asset('/src/image/category-icon/single-female-green.png')}}"> Mixed
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                <div class="col-sm-12 col-md-12 col-lg-12 category-name">
                                    <span>DOUBLES</span>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-3-dbmale" type="radio" name="category_name_4">
                                    <label for="seniors-3-dbmale" class="radio-custom-label">
                                        <img class="img-black img-double-male" src="{{ asset('/src/image/category-icon/double-male.png')}}">
                                        <img class="img-green img-double-male" src="{{ asset('/src/image/category-icon/double-male-green.png')}}"> Male
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-3-dbfemale" type="radio" name="category_name_4">
                                    <label for="seniors-3-dbfemale" class="radio-custom-label">
                                        <img class="img-black img-double-female" src="{{ asset('/src/image/category-icon/double-female.png')}}">
                                        <img class="img-green img-double-female" src="{{ asset('/src/image/category-icon/double-female-green.png')}}"> Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="radio-custom" id="seniors-3-dbmixed" type="radio" name="category_name_4">
                                    <label for="seniors-3-dbmixed" class="radio-custom-label">
                                        <img class="img-black img-mixed" src="{{ asset('/src/image/category-icon/mixed.png')}}">
                                        <img class="img-green img-mixed" src="{{ asset('/src/image/category-icon/mixed-green.png')}}"> Mixed
                                    </label>
                                </div>
                            </div>
                            <input class="edit-category-name" type="text" id="edit-category-name-1" name="" value="Male Singles">
                            <label for="edit-category-name-1"><img class="img-pencil-round" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></label>
                        </td>
                        <td class="td-court-size">
                            <select class="form-control ui dropdown">
                                <option>Mini Tennis</option>
                                <option>Mini Tennis</option>
                            </select>
                        </td>
                        <td class="td-ball-type">
                            <select class="form-control ui dropdown">
                                <option>Red ball 25%</option>
                                <option>Red ball 25%</option>
                            </select>
                        </td>
                        <td class="td-court-surface">
                            <select class="form-control ui dropdown">
                                <option>Grass</option>
                                <option>Grass</option>
                            </select>
                        </td>
                        <td class="td-level">
                            <select class="form-control ui dropdown">
                                <option>NTRP - lvl 1.0</option>
                                <option>NTRP - lvl 1.0</option>
                            </select>
                            <p>or</p>
                            <br/>
                            <span class="add-new-level-span">add new level</span>
                            <a class="add-new-level-link"><img class="img-plus-round" src="{{ asset('/src/image/category-icon/plus-round.png')}}"></a>
                        </td>
                        <td class="td-age-limit hide" id="age-limit-content">
                            <div id="panel-by-age-1" class="pannel panel-by-year">
                                <div class="form-group">
                                    <p>By Year <img class="btn-edit-age" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                                </div>
                                <div class="form-group">
                                    <label for="from1" class="label-from">From:</label>
                                    <input type="text" name="" id="from1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="from1" class="label-to">To:</label>
                                    <input type="text" name="" id="from1" placeholder="">
                                </div>
                            </div>
                        </td>
                        <td class="td-ranking-limit hide">
                            <div class="pannel panel-ranking-limit">
                                <div class="form-group panel-ranking-header">
                                    <img class="img-male" src="{{ asset('/src/image/category-icon/single-male.png')}}">
                                    <p><img class="btn-edit-ranking" src="{{ asset('/src/image/category-icon/pencil-round.png')}}"></p>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-type">Type:</label>
                                    <input type="text" name="" id="" value="ATP">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-range">Range:</label>
                                    <input type="text" name="" id="" placeholder="">
                                </div>
                            </div>
                            <div class="pannel panel-ranking-limit">
                                <div class="form-group panel-ranking-header">
                                    <img class="img-female" src="{{ asset('/src/image/category-icon/single-female.png')}}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-type">Type:</label>
                                    <input type="text" name="" id="" value="ATP">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-range">Range:</label>
                                    <input type="text" name="" id="" placeholder="">
                                </div>
                            </div>
                            <div class="pannel panel-ranking-limit">
                                <div class="form-group panel-ranking-header">
                                    <img class="img-double-female" src="{{ asset('/src/image/category-icon/double-female.png')}}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-type">Type:</label>
                                    <input type="text" name="" id="" value="ATP">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label-range">Range:</label>
                                    <input type="text" name="" id="" placeholder="">
                                </div>
                            </div>
                        </td>
                        <td class="td-location hide">
                            <select class="form-control ui dropdown">
                                <option>Select a Club / Venue here</option>
                                <option>Location 1</option>
                            </select>
                        </td>
                        <td class="td-date hide">
                            <div class="panel-date">
                                <p>GAMES</p>
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="" name="" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="form-group">
                                    <label>End</label>
                                    <input type="" name="" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="panel-date">
                                <p>REGISTRATION</p>
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="" name="" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="form-group">
                                    <label>End</label>
                                    <input type="" name="" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="panel-date">
                                <p>DRAW</p>
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="" name="" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="form-group">
                                    <label>End</label>
                                    <input type="" name="" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="registration-status">
                                <p>REGISTRATION STATUS</p>
                                <div class="switch">
                                    <span id="" class="btn-left btn-open active">Open</span>
                                    <span id="" class="btn-right btn-close">Close</span>
                                </div>
                                <div class="switch">
                                    <span id="" class="btn-left btn-manual active">Manual</span>
                                    <span id="" class="btn-right btn-auto">Auto</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-price hide">
                            <div class="pannel panel-price-fee">
                                <div class="form-group">
                                    <label for="" class="label-fee">Registration fees:
                                    </label>
                                    <input type="text" name="" id="" value="">
                                </div>
                            </div>
                        </td>
                        <td class="td-add-function">
                            <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}">Delete</span>
                            <span class="btn-clone"><img class="img-clone" src="{{ asset('/src/image/category-icon/clone.png')}}">Clone this Category</span>
                        </td>
                    </tr>
                    <tr>
                    <td class="td-category-name">
                        
                    </td>
                    <td class="td-court-size">
                        
                    </td>
                    <td class="td-ball-type">
                        
                    </td>
                    <td class="td-court-surface">
                        
                    </td>
                    <td class="td-level">
                        
                    </td>
                    <td class="td-age-limit hide" id="age-limit-content">
                        
                    </td>
                    <td class="td-ranking-limit hide">
                        
                    </td>
                    <td class="td-location hide">
                        
                    </td>
                    <td class="td-date hide">
                        
                    </td>
                    <td class="td-price hide">
                    </td>
                    <td class="td-add-function">
                        <span class="btn-new-category">New Category</span>
                    </td>
                </tr>
                </table>
            </div> 
            <!-- End senior table-->
        </div>
        <div class="col-sm-12 col-md-12 col-lg12 footer form-group text-center">
            <button type="button" class="btn btn-cancel">Cancel</button>
            <button type="button" class="btn btn-save">Save</button>
        </div>
    </div>
</div>


@endsection

@section ('modals')
<!-- Modal create new level -->
<div id="newLevelModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-medium">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD NEW level system</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="club-name" class="col-sm-3 col-md-3 col-lg-3 control-label text-left">Level System Name:</label>
            <div class="col-sm-8 col-md-8 col-lg-8">
              <input type="text" class="form-control" id="club-name" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="club-email" class="col-sm-3 col-md-3 col-lg-3 control-label text-left">Description:</label>
            <div class="col-sm-8 col-md-8 col-lg-8">
              <textarea class="form-control" id="description" rows="5" required></textarea> 
            </div>

          </div>
          
          <div class="form-group">
            <label for="" class="col-sm-3 col-md-3 col-lg-3 control-label text-left">Level:</label>
            <div class="col-sm-8 col-md-8 col-lg-8 ">
              <div class="table-header-wrapper clearfix">
                <div class="col-sm-3 col-md-3 col-lg-3 table-header border-right">LEVEL</div> 
                <div class="col-sm-5 col-md-5 col-lg-5 table-header border-right">LEVEL DESC</div>
                <div class="col-sm-4 col-md-4 col-lg-4 table-header border-right">ACTION</div>
              </div>
              <div id="table-scroll" class="mCustomScrollbar" data-mcs-theme="dark">
                <table class="table table-striped"> 
                  <tbody>
                   <tr> 
                    <td class="col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" id="" type="text" name="" >
                    </td>
                    <td class="col-sm-5 col-md-5 col-lg-5">
                      <input class="form-control" id="" type="text" name="" >
                    </td>
                    <td class="col-sm-4 col-md-4 col-lg-4">
                      <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}"></span> 
                    </td>
                  </tr> 
                  <tr> 
                    <td class="col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" id="" type="text" name="" >
                    </td>
                    <td class="col-sm-5 col-md-5 col-lg-5">
                      <input class="form-control" id="" type="text" name="" >
                    </td>
                    <td class="col-sm-4 col-md-4 col-lg-4">
                      <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}"></span> 
                    </td>
                  </tr> 
                  <tr> 
                    <td class="col-sm-3 col-md-3 col-lg-3">
                      <input class="form-control" id="" type="text" name="" >
                    </td>
                    <td class="col-sm-5 col-md-5 col-lg-5">
                      <input class="form-control" id="" type="text" name="" >
                    </td>
                    <td class="col-sm-4 col-md-4 col-lg-4">
                      <span class="btn-delete"><img class="img-delete" src="{{ asset('/src/image/category-icon/close.png')}}"></span> 
                    </td>
                  </tr> 
                  <tr> 
                    <td class="col-sm-3 col-md-3 col-lg-3"></td>
                    <td class="col-sm-5 col-md-5 col-lg-5"></td> 
                    <td class="col-sm-4 col-md-4 col-lg-4"><button id="btn-add-club-court" type="button"></button></td>

                  </tr> 
                </tbody> 
              </table>
            </div>
          </div>     
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <div class="form-group text-center">
        <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-green" data-dismiss="modal">Add</button>
      </div>
    </div>
  </div>

</div>
</div>
<!-- End modal -->

<!-- Modal ranking -->
<div id="rankingModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">RANKING SINGLES </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <select class="form-control ui dropdown">
                <option>ATP</option>
                <option>ATP</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="lowest" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Lowest</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <select class="form-control ui dropdown" id="lowest">
                <option>100</option>
                <option>200</option>
              </select>
            </div>
            <label for="highest" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Highest</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <select class="form-control ui dropdown" id="highest">
                <option>100</option>
                <option>200</option>
              </select>
            </div>
          </div>
          <div class="form-group check-allow">
            <input class="checkbox-custom" id="allow" type="checkbox" name="classifications" >
            <label for="allow" class="checkbox-custom-label">Do not allow players with above ranking</label>
          </div>
          <div class="form-group add-ranking">
            <span class="add-new-level-span">add ranking system</span>
            <a class="add-new-level-link"><img class="img-plus-round" id="xx" src="{{ asset('/src/image/category-icon/plus-round.png')}}"></a>
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


<!-- Modal edit Price -->
<div id="editPriceModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PRICE</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          
          <div class="form-group">
            <label for="" class="col-sm-4 col-md-4 col-lg-4 control-label text-left">Registration
fees:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 select-fee">
              <select class="form-control ui dropdown" id="">
                <option>USD</option>
                <option>USD</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="note" class="col-sm-4 col-md-4 col-lg-4 control-label text-left">Notes:</label>
            <div class="col-sm-8 col-md-8 col-lg-8">
             <textarea class="form-control" rows="4" id="note"></textarea>
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

<!-- Modal edit Age -->
<div id="editAgeModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AGES</h4>
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
