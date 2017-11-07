@extends ('layout.master')

@section ('title')
Leagues
@endsection

@section ('content')


<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="leagues">
        <div class="leagues filter">
            <form class="form-horizontal" method="post" action="{{ asset('login') }}" id="form-organization">
                <div class="form-group">
                    <label for="search-by" class="col-sm-2 col-md-2 control-label text-left">Search by:</label>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <input type="text" class="form-control" id="search-by" value="">
                        <p class="col-sm-7 col-md-7 col-lg-7 note-textbox">(Search by Competition name)</p>
                    </div>
                </div>
                <div class="form-group filter-content">
                    <label for="tournament-type" class="col-sm-2 col-md-2 control-label text-left">League types:</label>
                    <div class="col-sm-1 col-md-1 col-lg-1 tournament-type-checkbox" >
                        <input class="checkbox-custom" id="team" type="checkbox" name="" >
                        <label for="team" class="checkbox-custom-label">Team</label>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 tournament-type-checkbox">
                        <input class="checkbox-custom" id="individual" type="checkbox" name="" >
                        <label for="individual" class="checkbox-custom-label">Individual</label>
                    </div>
                    <label for="season" class="col-sm-2 col-md-2 col-lg 2 control-label text-left">Season:</label>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <select id="season" class="form-control">
                            <option>Select Season</option>
                            <option>Select Season</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="classification" class="col-sm-2 col-md-2 control-label text-left">Classifications:</label>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <select id="classification" class="form-control">
                            <option>Select Classification</option>
                            <option>Select Classification</option>
                        </select>  
                    </div>
                    <label for="competition-status" class="col-sm-2 col-md-2 col-lg-2 control-label text-left">Competition status:</label>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <button class="btn-green btn-status">In-Active</button>
                        <button class="btn-green btn-status">Signing Up</button>
                        <button class="btn-green btn-status">In-Process</button>
                        <button class="btn-green btn-status">Completed</button>
                    </div>
                </div>
                <div class="form-group filter-content">
                    <label for="tournament-type" class="col-sm-2 col-md-2 control-label text-left">Gender:</label>
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
        <div class="col-sm-12 col-md-12 col-lg-12">
            <hr/>
        </div>
        <div class="search-table-container">
            <div class="col-sm-2 col-md-2 col-lg-2">
                <h2>LEAGUES</h2>
            </div>
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
                        <div class="col-sm-2 col-md-2 col-lg-2 table-header border-right">COMPETITION NAME<span class="sort-icon"></span></div> 
                        <div class="col-sm-2 col-md-2 col-lg-2 table-header border-right">CLASSIFICATION<span class="sort-icon"></span></div>
                        <div class="col-sm-2 col-md-2 col-lg-2 table-header border-right">CATEGORY<span class="sort-icon"></span></div>
                        <div class="col-sm-1 col-md-1 col-lg-1 table-header border-right">GENDER<span class="sort-icon"></span></div> 
                        <div class="col-sm-1 col-md-1 col-lg-1 table-header border-right">START DATE<span class="sort-icon"></span></div> 
                        <div class="col-sm-1 col-md-1 col-lg-1 table-header border-right">END DATE<span class="sort-icon"></span></div> 
                        <div class="col-sm-1 col-md-1 col-lg-1 table-header border-right">STATUS<span class="sort-icon"></span></div> 
                        <div class="col-sm-2 col-md-2 col-lg-2 table-header">ACTION</div> 
                    </div>
                    <div id="table-scroll" class="mCustomScrollbar" data-mcs-theme="dark">
                        <table class="table table-striped"> 
                            <tr> 
                                <td class="col-sm-2 col-md-2 col-lg-2 competition-name" rowspan="4">
                                    New York Open 2017
                                </td> 
                                <td class="col-sm-2 col-md-2 col-lg-2 classification" rowspan="2">
                                    Youth
                                </td> 
                                <td class="col-sm-2 col-md-2 col-lg-2" >
                                    Boys 10 singles
                                </td> 
                                <td class="col-sm-1 col-md-1 col-lg-1 text-fuzzy">
                                    Male
                                </td>
                                <td class="col-sm-1 col-md-1 col-lg-1">
                                   11/02/2017
                               </td>
                               <td class="col-sm-1 col-md-1 col-lg-1">
                                11/02/2017
                            </td>
                            <td class="col-sm-1 col-md-1 col-lg-1">
                                Inactive
                            </td>
                            <td class="col-sm-2 col-md-2 col-lg-2 action">
                                <button class="btn-pencil" type="button"></button>
                                <a href="#">Dashboard</a>
                            </td>

                        </tr> 
                        <tr> 

                            <td class="col-sm-2 col-md-2 col-lg-2">
                                Boys 10 doubles
                            </td>
                            <td class="col-sm-1 col-md-1 col-lg-1">
                               Female
                           </td>
                           <td class="col-sm-1 col-md-1 col-lg-1">
                            11/02/2017
                        </td>
                        <td class="col-sm-1 col-md-1 col-lg-1">
                            11/02/2017
                        </td>
                        <td class="col-sm-1 col-md-1 col-lg-1">
                            Signing Up
                        </td>
                        <td class="col-sm-2 col-md-1 col-lg-2 action">
                            <button class="btn-pencil" type="button"></button>
                            <a href="#">Dashboard</a>
                        </td>

                    </tr>   
                    <tr> 

                        <td class="col-sm-2 col-md-2 col-lg-2 classification" rowspan="2">
                            Handicap
                        </td>
                        <td class="col-sm-2 col-md-2 col-lg-2">
                            Man 45+
                        </td>
                        <td class="col-sm-1 col-md-1 col-lg-1 text-fuzzy" >
                            Male
                        </td>
                        <td class="col-sm-1 col-md-1 col-lg-1">
                            11/02/2017
                        </td>
                        <td class="col-sm-1 col-md-1 col-lg-1">
                            11/02/2017
                        </td>
                        <td class="col-sm-1 col-md-1 col-lg-1">
                           In-Process
                       </td>
                       <td class="col-sm-2 col-md-1 col-lg-2 action">
                        <button class="btn-pencil" type="button"></button>
                        <a href="#">Dashboard</a>
                    </td>

                </tr>   
                <tr> 


                    <td class="col-sm-2 col-md-2 col-lg-2">
                        Women 45+
                    </td>
                    <td class="col-sm-1 col-md-1 col-lg-1">
                        Female
                    </td>
                    <td class="col-sm-1 col-md-1 col-lg-1">
                        11/02/2017
                    </td>
                    <td class="col-sm-1 col-md-1 col-lg-1">
                        11/02/2017
                    </td>
                    <td class="col-sm-1 col-md-1 col-lg-1">
                        Completed
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
