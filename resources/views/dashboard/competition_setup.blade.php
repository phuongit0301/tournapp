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
      <li class="active now"><a href="#">1. Set Up</a></li>
      <li><a href="#">2. Categories</a></li>
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
<form class="form-horizontal" method="post" action="" id="form-competition"  role="form">

  <div class="col-sm-12 col-md-12 col-lg-11 competition-setup">
    <div class="competition-info">
      <div class="row-box">
        <div class=" row form-group">
          <label class="col-sm-3 col-md-3">
            Name of Competition:<span class="red-flower">*</span>
            <p>(Placeholder for formfield desc here...)</p>
          </label>
          <div class="col-sm-9 col-md-9 no-padding-left">
            <input type="text" class="form-control" id="name" placeholder="" required>
          </div>
        </div>
        <div class=" row form-group">
          <div class="col-sm-7 col-md-7">
            <label class="col-sm-5 col-md-5">
              Competition Logo
              <p>(Placeholder for formfield desc here...)</p>
            </label>
            <div class="col-sm-4 col-md-4 avatar-setup">
              <img src="{{ asset('src/image/default-logo.png') }}" />
            </div>
            <div class="col-sm-3 col-md-3 custom-file-upload">
              <input type="file" name="file" id="file" class="inputfile" />
              <label for="file" class="label-file">Upload</label>
            </div>
          </div>
          <div class="col-sm-5 col-md-5">
            <div class="row">
              <label class="col-sm-4 col-md-4 col-md-offset-1">Start Date:<span class="red-flower">*</span></label>
              <div class="col-sm-7 col-md-7 datepicker-wrapper">
                <input class="form-control datepicker" id="start-date" data-provide="datepicker" required >
              </div>
            </div>
            <div class="row">
              <label class="col-sm-4 col-md-4 col-md-offset-1">End Date:<span class="red-flower">*</span></label>
              <div class="col-sm-7 col-md-7 datepicker-wrapper">
                <input class="form-control datepicker" id="start-date" data-provide="datepicker" required >
              </div>
            </div>
            <div class="row">
              <label class="col-sm-4 col-md-4 col-md-offset-1">Timezone:</label>
              <div class="col-sm-7 col-md-7">
                <select id="timezone-select" class="ui dropdown">
                  <option>UTC-07:00</option>
                  <option>UTC-07:00</option>
                  <option>UTC-07:00</option>
                </select>
              </div>
            </div>
            
          </div>
        </div>
        <div class=" row form-group ">
          <label class="col-sm-3 col-md-3">
           Competition Type:<span class="red-flower">*</span>
           <p>(Placeholder for formfield desc here...)</p>
         </label>
        <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="team" type="radio" name="area">
          <label for="team" class="radio-custom-label">Team</label>
        </div>
        <div class="col-sm-2 col-md-2">
          <input class="radio-custom" id="individual" type="radio" name="area">
          <label for="individual" class="radio-custom-label">Individual</label>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-sm-11 col-md-11 table-area">
  <div class="table-container">
    <div class="table-header-wrapper clearfix">
      <div class="col-sm-2 col-md-2 table-header border-right">REGION</div> 
      <div class="col-sm-4 col-md-4 table-header border-right">VENUES</div> 
      <div class="col-sm-6 col-md-6 table-header ">CLASSIFICATIONS</div> 
    </div>
    <div id="table-scroll" class="mCustomScrollbar" data-mcs-theme="dark">
      <table class="table table-striped"> 
        <tr> 
          <td class="col-sm-2 col-md-2 area">
            <p>Mass</p>
            <span class="btn-remove-area">Remove Area</span>
          </td> 
          <td class="col-sm-4 col-md-4 venues">
            <table class="table-venues">
              <tr>
                <td>
                  <div class="col-md-6 text-venue">boston club</div>
                  <div class="col-md-6"><a class="btn-remove-venue">Remove venue</a></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="col-md-6 text-venue">newton club</div>
                  <div class="col-md-6"><a class="btn-remove-venue">Remove venue</a></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="col-md-6 text-venue">deedham club</div>
                  <div class="col-md-6"><a class="btn-remove-venue">Remove venue</a></div>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="btn-add-venue">Add Venue</span> <br/>
                </td>
              </tr>
            </table>
          </td> 

          <td class="col-sm-6 col-md-6 other-info">
            <div class="row classification">
             <div class="col-md-2">
               <p>Classifications:<span class="red-flower">*</span></p>
             </div>
             <div class="col-md-10 checkbox-container">
               <div class="col-md-4 box-checkbox">
               <input class="checkbox-custom" id="junior1" type="checkbox" name="" >
                <label for="junior1" class="checkbox-custom-label">Juniors</label>
              </div>
              <div class="col-md-4 box-checkbox">
                <input class="checkbox-custom" id="senior1" type="checkbox" name="" >
                <label for="senior1" class="checkbox-custom-label">Seniors</label>
              </div>
              <div class="col-md-4 box-checkbox">
                <input class="checkbox-custom" id="handicap1" type="checkbox" name="" >
                <label for="handicap1" class="checkbox-custom-label">Handicaps</label>
              </div>
            </div>
          </div>
          <div class="row new-classification">
            <div class="col-md-6 col-md-offset-4">
              <span class="or">or</span>
              <span class="btn-new-classification">New Classification</span>
            </div>
          </div>
        </td>
      </tr> 
      <tr>
        <td class="empty-line"></td>
      </tr>
      <tr> 
        <td class="col-sm-2 col-md-2 area">
          <p>VERMOUNT</p>
          {{-- <span class="btn-add-venue">Add Venue</span> <br/> --}}
          <span class="btn-remove-area">Remove Area</span>
        </td> 
        <td class="col-sm-4 col-md-4 venues">
          <table class="table-venues">
            <tr>
              <td>
                <div class="col-md-6 text-venue">white M club</div>
                <div class="col-md-6"><a class="btn-remove-venue">Remove venue</a></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="col-md-6 text-venue">burlington club</div>
                <div class="col-md-6"><a class="btn-remove-venue">Remove venue</a></div>
              </td>
            </tr>
            <tr>
                <td>
                  <span class="btn-add-venue">Add Venue</span> <br/>
                </td>
              </tr>
          </table>
        </td> 

        <td class="col-sm-6 col-md-6 other-info">
          <div class="row classification">
           <div class="col-md-2">
             <p>Classifications:<span class="red-flower">*</span></p>
           </div>
           <div class="col-md-10 checkbox-container">
             <div class="col-md-4 box-checkbox">
              <input class="checkbox-custom" id="junior2" type="checkbox" name="" >
              <label for="junior2" class="checkbox-custom-label">Juniors</label>
            </div>
            <div class="col-md-4 box-checkbox">
              <input class="checkbox-custom" id="senior2" type="checkbox" name="" >
              <label for="senior2" class="checkbox-custom-label">Seniors</label>
            </div>
            <div class="col-md-4 box-checkbox">
              <input class="checkbox-custom" id="handicap2" type="checkbox" name="" >
              <label for="handicap2" class="checkbox-custom-label">Handicaps</label>
            </div>
          </div>
        </div>
        <div class="row new-classification">
          <div class="col-md-6 col-md-offset-4">
            <span class="or">or</span>
            <span class="btn-new-classification">New Classification</span>
          </div>
        </div>
      </td>
    </tr> 
    <tr>
      <td class="empty-line"></td>
    </tr>
    <tr>
      <td colspan="3" class="td-new-area">
        <button class="btn btn-green no-radius btn-new-area" type="button">+ Add New Area</button>
      </td>
    </tr>
  </table>
</div>
</div>
</div>
<div class="col-sm-12 col-12 content-footer text-center">
  <button class="btn btn-cancel" type="submit">Cancel</button>
  <button class="btn btn-save" type="submit">Save</button>
</div>
</form>

@endsection

@section ('modals')
<!-- Modal create new club -->
<div id="newClubModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CREATE NEW CLUB</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group big-label">
            <label for="" class="col-sm-4 col-md-4 text-left">CLUB INFO</label>
          </div>
          <div class="form-group">
            <label for="club-name" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Name:<span class="red-flower">*</span></label>
            <div class="col-sm-10 col-md-10 col-lg-10">
              <input type="text" class="form-control" id="club-name" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="club-email" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Email:<span class="red-flower">*</span></label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="club-email" value="" required>
            </div>
            <label for="club-phone" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Phone:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="club-phone" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="club-website" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Website:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="club-website" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="file" class="col-sm-2 col-md-2 control-label text-left">Logo:</label>
            <div class="col-sm-8">
              <div class="avatar-setup">
                <img id="sub_thumbnil" alt="image" data-default-url="http://localhost/tournapp/public/src/image/default-logo.png" src="http://localhost/tournapp/public/src/image/default-logo.png">
              </div>
            <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                <input type="file" name="sub_organization_logo" id="sub_organization_logo" class="inputfile" accept="image/*" onchange="showMyImage(this, 'sub_thumbnil')">
                <label for="sub_organization_logo" class="label-file">Change Logo</label>    
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                <button class="btn-remove" id="btn-remove-logo" type="button">Remove Logo</button>
            </div>
          </div>
          </div>
          <div class="form-group big-label">
            <label for="" class="col-sm-4 col-md-4 text-left">PERSON IN CHARGE</label>
          </div>
          <div class="form-group">
            <label for="person-in-charge" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Name:<span class="red-flower">*</span></label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="person-in-charge" value="">
            </div>
            <label for="person-email" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Email:<span class="red-flower">*</span></label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="person-email" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="person-phone" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Cell Phone:<span class="red-flower">*</span></label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="person-phone" value="" required>
            </div>
          </div>
          <div class="form-group big-label">
            <label for="" class="col-sm-4 col-md-4 text-left">CLUB’S ADDRESS</label>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Address: </label>
            <div class="col-sm-10 col-md-10 col-lg-10">
              <input type="text" class="form-control" id="address" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="city" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">City:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <select class="form-control ui dropdown" id="city">
                <option>Select City</option>
                <option>Paris</option>
              </select>
            </div>
            <label for="state" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">State:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <select class="form-control ui dropdown" id="state">
                <option>Select State</option>
                <option>Paris</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="zip" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Zip:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <input type="text" class="form-control" id="zip" value="" required>
            </div>
            <label for="country" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Country:</label>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <select class="form-control ui dropdown" id="city">
                <option>Select Country</option>
                <option>Viet Nam</option>
              </select>
            </div>      
          </div>
          <div class="form-group big-label">
            <label for="" class="col-sm-4 col-md-4 text-left">CLUB’S COURTS</label>
          </div>
          <div class="form-group">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="table-header-wrapper clearfix">
                <div class="col-sm-3 col-md-3 col-lg-3 table-header border-right">INDOOR / OUTDOOR</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header border-right">NUMBER</div>
                <div class="col-sm-3 col-md-3 col-lg-3 table-header border-right">SURFACE</div>
                <div class="col-sm-2 col-md-2 col-lg-2 table-header border-right">LIGHTS</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header"></div> 
              </div>
              <div id="competition-setup-modal-table-scroll" class="mCustomScrollbar" data-mcs-theme="dark">
                <table class="table table-striped"> 
                  <tbody>
                   <tr> 
                    <td class="col-sm-3 col-md-3 col-lg-3">
                      <div class="form-group inoutdoor">
                        <input class="radio-custom" id="radio1" type="radio" name="row1"  >
                        <label for="radio1" class="radio-custom-label">Indoor</label>

                        <input class="radio-custom" id="radio2" type="radio" name="row1" >
                        <label for="radio2" class="radio-custom-label">Outdoor</label>
                      </div>
                    </td>
                    <td class="col-sm-2 col-md-2 col-lg-2 col-body">
                     <select class="form-control ui dropdown" id="number">
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </td>
                  <td class="col-sm-3 col-md-3 col-lg-3 col-body">
                   <select class="form-control ui dropdown" id="surface">
                    <option>Grass</option>
                    <option>Grass</option>
                  </select>
                </td>
                <td class="col-sm-2 col-md-2 col-lg-2">
                  <div class="form-group light">
                   <input class="checkbox-custom" id="light1" type="checkbox" name=""  >
                   <label for="light1" class="checkbox-custom-label">Light</label>
                 </div>
               </td> 
               <td class="col-sm-2 col-md-2 col-lg-2 text-center">
                  <span class="btn-remove-club">Remove</span>
              </td> 
             </tr> 

             <tr> 
              <td class="col-sm-3 col-md-3 col-lg-3">
               <div class="form-group inoutdoor">
                 <input class="radio-custom" id="radio3" type="radio" name="row2" >
                 <label for="radio3" class="radio-custom-label">Indoor</label>

                 <input class="radio-custom" id="radio4" type="radio" name="row2" >
                 <label for="radio4" class="radio-custom-label">Outdoor</label>
               </div>
             </td>
             <td class="col-sm-2 col-md-2 col-lg-2 col-body">
              <select class="form-control ui dropdown" id="number">
                <option>1</option>
                <option>2</option>
              </select>
            </td>
            <td class="col-sm-3 col-md-3 col-lg-3 col-body">
              <select class="form-control ui dropdown" id="surface">
                <option>Grass</option>
                <option>Grass</option>
              </select>
            </td>
            <td class="col-sm-2 col-md-2 col-lg-2">
              <div class="form-group light">
                <input class="checkbox-custom" id="light2" type="checkbox" name=""  >
                <label for="light2" class="checkbox-custom-label">Light</label>
              </div>
            </td> 
            <td class="col-sm-2 col-md-2 col-lg-2 text-center">
                  <span class="btn-remove-club">Remove</span>
            </td> 
          </tr> 
          <tr> 
            <td class="col-sm-3 col-md-3 col-lg-3">
             <div class="form-group inoutdoor">
               <input class="radio-custom" id="radio5" type="radio" name="row3" >
               <label for="radio5" class="radio-custom-label">Indoor</label>

               <input class="radio-custom" id="radio6" type="radio" name="row3" >
               <label for="radio6" class="radio-custom-label">Outdoor</label>
             </div>
           </td>
           <td class="col-sm-2 col-md-2 col-lg-2 col-body">
            <select class="form-control ui dropdown" id="number">
              <option>1</option>
              <option>2</option>
            </select>
          </td>
          <td class="col-sm-3 col-md-3 col-lg-3 col-body">
            <select class="form-control ui dropdown" id="surface">
              <option>Grass</option>
              <option>Grass</option>
            </select>
          </td>
          <td class="col-sm-2 col-md-2 col-lg-2">
            <div class="form-group light">
              <input class="checkbox-custom" id="light3" type="checkbox" name=""  >
              <label for="light3" class="checkbox-custom-label">Light</label>
            </div>
          </td> 
          <td class="col-sm-2 col-md-2 col-lg-2 text-center">
            <span class="btn-remove-club">Remove</span>
          </td> 
        </tr> 

        <tr> 
          <td class="col-sm-3 col-md-3 col-lg-3"></td>
          <td class="col-sm-2 col-md-2 col-lg-2"></td> 
          <td class="col-sm-3 col-md-3 col-lg-3 col-body"></td>
          <td class="col-sm-2 col-md-2 col-lg-2"></td> 
          <td class="col-sm-2 col-md-2 col-lg-2">
            <button id="btn-add-club-court" type="button"></button>
          </td>
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
    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-green" data-dismiss="modal">Create</button>
  </div>
</div>
</div>

</div>
</div>
<!-- End modal -->

<!-- Modal new classification -->
<div id="newClassificationModal" class="modal fade" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">NEW CLASSIFICATION</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="new-classification-name" class="col-sm-3 col-md-3">Name:</label>
            <div class="col-sm-12 col-md-12">
              <input type="text" name="" id="new-classification-name" class="form-control">
            </div>
          </div>
         
        </form>
      </div>
      <div class="modal-footer">
        <div class="form-group text-right">
          <button type="button" class="btn btn-green" data-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->

<!-- Modal add venue -->
<div id="addVenueModal" class="modal fade" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD VENUE</h4>
      </div>
      <div class="modal-body">
        <div class="row-box-club">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="form-group">
                <input type="" placeholder="Search Venues" name="" class="form-control input-search-club">
              </div>
              <div id="venues-control" class="mCustomScrollbar venues-control" data-mcs-theme="dark">
                <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="venue-1" type="checkbox" name="" >
                   <label for="venue-1" class="checkbox-custom-label">boston club</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="venue-2" type="checkbox" name="" >
                   <label for="venue-2" class="checkbox-custom-label">newton club</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="venue-3" type="checkbox" name="" >
                   <label for="venue-3" class="checkbox-custom-label">deedham club</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="venue-4" type="checkbox" name="" >
                   <label for="venue-4" class="checkbox-custom-label">Cooper Park</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="venue-5" type="checkbox" name="" >
                   <label for="venue-5" class="checkbox-custom-label">Hobart International Tennis Centre</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-1" type="checkbox" name="" >
                   <label for="club-control-checkbox-1" class="checkbox-custom-label">Hope Island Resort Tennis Centre</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-1" type="checkbox" name="" >
                   <label for="club-control-checkbox-1" class="checkbox-custom-label">Hordem Pavilion</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-1" type="checkbox" name="" >
                   <label for="club-control-checkbox-1" class="checkbox-custom-label">boston club</label>
                   <a href="">View maps</a>
                 </div>
               </div>
               <div class="form-group ">
                 <div class="col-sm-12 col-md-12 box-checkbox">
                   <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-1" type="checkbox" name="" >
                   <label for="club-control-checkbox-1" class="checkbox-custom-label">boston club</label>
                   <a href="">View maps</a>
                 </div>
               </div>

             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-group text-right">
          <button type="button" class="btn btn-green" data-toggle="modal" href="#newClubModal">Create New Venue</button>
          <button type="button" class="btn btn-green" >Add Selected Venues</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->

<!-- Modal new area -->
<div id="newAreaModal" class="modal fade" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD AREA</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="new-classification-name" class="col-sm-3 col-md-3">Name:</label>
            <div class="col-sm-12 col-md-12">
              <select id="available-area-select" class="ui dropdown">
                  <option>MASS</option>
                  <option>MASS</option>
                </select>
            </div>
            <div class="col-md-12">
              <div class="col-md-offset-8">
                <button type="button" class="btn btn-green add-area">Add Area</button>
              </div>
            </div>
            <div class="col-md-12 or">or</div>
          </div>
         <div class="form-group">
            <label for="new-classification-name" class="col-sm-3 col-md-3">New area:</label>
            <div class="col-sm-12 col-md-12">
              <input type="text" name="" class="form-control">
            </div>
            <div class="col-md-12">
              <div class="col-md-offset-8">
                <button type="button" class="btn btn-green save-area">Save and Add

</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->
@endsection
