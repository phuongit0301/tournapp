@extends ('layout.master')

@section ('title')
Tournaments
@endsection

@section ('content')


<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="tournament-list">
        <div class="tournament-list filter">
            <form class="form-horizontal" method="post" action="" id="form-tournament">
                <div class="form-group">
                    <label for="organization-select" class="col-sm-2 col-md-2 control-label text-left">Organization:</label>
                    <div class="col-sm-8 col-md-8">
                        <select id="organization-select" class="ui dropdown organization-filter">
                            <option>USTA</option>
                            <option>NE Section</option>
                            <option>south central section</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="search-by" class="col-sm-2 col-md-2 control-label text-left">Search by:</label>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input type="text" class="form-control" id="search-by" value="">
                        <p class="col-sm-7 col-md-7 col-lg-7 note-textbox">(Search by Competition name)</p>
                    </div>
                </div>
                <div class="form-group filter-content">
                    <label for="tournament-type" class="col-sm-2 col-md-2 control-label text-left">Area:</label>
                    <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox" >
                        <input class="checkbox-custom" id="mass" type="checkbox" name="" >
                        <label for="mass" class="checkbox-custom-label">Mass</label>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 tournament-type-checkbox">
                        <input class="checkbox-custom" id="vermount" type="checkbox" name="" >
                        <label for="vermount" class="checkbox-custom-label">Vermount</label>
                    </div>

                    <label for="year" class="col-sm-1 col-md-1 col-lg-1 control-label text-left">Year:</label>
                    <div class="col-sm-1 col-md-1 col-lg-1">
                        <select id="year" class="ui dropdown year-filter">
                            <option>2017</option>
                        </select>
                    </div>
                    <label for="status" class="col-sm-1 col-md-1 col-lg-1 control-label text-left">Status:</label>
                    <div class="col-sm-2 col-md-2 col-lg-2 ">
                        <select class="ui dropdown status-filter" id='tournament-status-dropdown'>
                          <option value="1">On-going</option>
                          <option value="2">Finished</option>
                          <option value="0">In Planning</option>
                      </select>
                  </div>
              </div>
              <div class="form-group filter-content">
                <label for="tournament-type" class="col-sm-2 col-md-2 control-label text-left">Tournament types:</label>
                <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox" >
                    <input class="checkbox-custom" id="team" type="checkbox" name="" >
                    <label for="team" class="checkbox-custom-label">Team</label>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 tournament-type-checkbox">
                    <input class="checkbox-custom" id="individual" type="checkbox" name="" >
                    <label for="individual" class="checkbox-custom-label">Individual</label>
                </div>

                <label for="classification" class="col-sm-2 col-md-2 control-label text-left">Classifications:</label>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <select class="ui dropdown classification-filter" id="classification">
                        <option>Juniors</option>
                        <option>Seniors</option>
                    </select>
                </div>
            </div>
            <div class="form-group filter-content" >
                <label for="tournament-type" class="col-sm-2 col-md-2 control-label text-left"></label>
                <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox" >
                    <input class="checkbox-custom" id="male" type="checkbox" name="" >
                    <label for="male" class="checkbox-custom-label">Male</label>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                    <input class="checkbox-custom" id="female" type="checkbox" name="" >
                    <label for="female" class="checkbox-custom-label">Female</label>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox">
                    <input class="checkbox-custom" id="mixed" type="checkbox" name="" >
                    <label for="mixed" class="checkbox-custom-label">Mixed</label>
                </div>
            </div>

        </form>
    </div>


    <div class="search-table-container">
    {{-- <div class="col-sm-2 col-md-2 col-lg-2">
        <h2>SENIORS</h2>
    </div> --}}
    <div class="table-options">
        <div class="col-sm-12 col-md-12 col-lg-12 control">
            <div class="form-group page-option">
                <label for="record-per-page" class="col-sm-2 col-md-2 col-lg-2 control-label ">Records per page:</label>
                <div class="col-sm-1 col-md-1 col-lg-1">
                    <input type="number" class="form-control" id="record-per-page" value="10">
                </div>
                <label for="record-per-page" class="col-sm-1 col-md-1 col-lg-1 control-label ">Go to:</label>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <input type="number" class="form-control" id="go-to" value="10"> 
                        </div>
                        <label class="col-sm-6 col-md-6 col-lg-6 total-page" for="go-to">/ 150</label>
                    </div>



                </div> 
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="table-container">
            <div class="table-header-wrapper clearfix">
                <div class="col-sm-1 col-md-1 col-lg-1 table-header border-right">#</div> 
                <div class="col-sm-3 col-md-3 col-lg-3 table-header sort-able border-right">COMPETITION NAME</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header sort-able border-right">START DATE</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header sort-able border-right">END DATE</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header sort-able border-right">STATUS</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header">ACTION</div> 
            </div>
            <div id="table-scroll" class="mCustomScrollbar" data-mcs-theme="dark">
                <table class="table table-striped"> 
                    <tr> 
                        <td class="col-sm-1 col-md-1 col-lg-1 ">
                            1
                        </td> 
                        <td class="col-sm-3 col-md-3 col-lg-3 competition-name">
                            New York Open 2017
                        </td> 
                        
                        <td class="col-sm-2 col-md-2 col-lg-2">
                         11/02/2017
                     </td>
                     <td class="col-sm-2 col-md-2 col-lg-2">
                        11/02/2017
                    </td>
                    <td class="col-sm-2 col-md-2 col-lg-2">
                        Inactive
                    </td>
                    <td class="col-sm-2 col-md-2 col-lg-2 action">
                        <button class="btn-pencil" type="button"></button>
                        <a href="#">Dashboard</a>
                    </td>

                </tr> 
                <tr> 

                  <td class="col-sm-1 col-md-1 col-lg-1 ">
                    2
                </td> 
                <td class="col-sm-3 col-md-3 col-lg-3 competition-name">
                    New York Open 2017
                </td> 

                <td class="col-sm-2 col-md-2 col-lg-2">
                 11/02/2017
             </td>
             <td class="col-sm-2 col-md-2 col-lg-2">
                11/02/2017
            </td>
            <td class="col-sm-2 col-md-2 col-lg-2">
                Inactive
            </td>
            <td class="col-sm-2 col-md-1 col-lg-2 action">
                <button class="btn-pencil" type="button"></button>
                <a href="#">Dashboard</a>
            </td>

        </tr>   
        <tr> 
            <td class="col-sm-1 col-md-1 col-lg-1 ">
                3
            </td> 
            <td class="col-sm-3 col-md-3 col-lg-3 competition-name">
                New York Open 2017
            </td> 

            <td class="col-sm-2 col-md-2 col-lg-2">
               11/02/2017
           </td>
           <td class="col-sm-2 col-md-2 col-lg-2">
            11/02/2017
        </td>
        <td class="col-sm-2 col-md-2 col-lg-2">
            Inactive
        </td>
        <td class="col-sm-2 col-md-1 col-lg-2 action">
            <button class="btn-pencil" type="button"></button>
            <a href="#">Dashboard</a>
        </td>

    </tr>   
    <tr> 
        <td class="col-sm-1 col-md-1 col-lg-1 ">
         4
     </td> 
     <td class="col-sm-3 col-md-3 col-lg-3 competition-name">
        New York Open 2017
    </td> 

    <td class="col-sm-2 col-md-2 col-lg-2">
     11/02/2017
 </td>
 <td class="col-sm-2 col-md-2 col-lg-2">
    11/02/2017
</td>
<td class="col-sm-2 col-md-2 col-lg-2">
    Inactive
</td>
<td class="col-sm-2 col-md-2 col-lg-2 action">
    <button class="btn-pencil" type="button"></button>
    <a href="#">Dashboard</a>
</td>

</tr>   
</table>
</div>
</div>
<div class="custom-pagination">
    <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="form-group">
            <a href="" class="custom-pagination first-index"> << </a>
            <a class="custom-pagination prev">Prev</a>
            <a class="custom-pagination number">1</a>
            <a class="custom-pagination number selected">2</a>
            <a class="custom-pagination number">3</a>
            <a class="custom-pagination next">Next</a>
            <a href="" class="custom-pagination last-index"> >> </a>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg12 form-group text-right">
    <button type="button" class="btn btn-green">Create new Tournament</button>
</div>
</div>
@endsection
