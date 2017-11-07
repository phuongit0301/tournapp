<!DOCTYPE html>
<html>

<head>
    <title>Tournapps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/modules.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/jquery.mCustomScrollbar.css') }}">
</head>

<body>
    <div class="tournapps">
        <div class="page-wrapper">
            <div class="col-sm-3 col-md-2 sidebar-wrapper">
                <div class="box-left">
                    <div class="logo">
                        <img src="{{ asset('/src/image/logo1x.png')}}" />
                    </div>
                    <ul class="sidebar">
                        <li>
                            <a href="#" class="text-upper"> <img src="{{ asset('src/image/iconmenu1.png') }}" />Organization </a>
                            <ul class="sidebar-child-first">
                                <li><a class="active" href="">Configuration</a></li>
                                <li><a href="">Site Content</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="text-upper">
                                <img src="{{ asset('src/image/iconmenu2.png') }}" /> Competition
                            </a>
                            <ul class="sidebar-child-first">
                                <li><a href="">Tournament</a>
                                    <ul class="sidebar-child-second">
                                        <li><a href="">Active</a>
                                            <ul class="sidebar-child-third">
                                                <li><a href="">NY State Open</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Recent</a>
                                            <ul class="sidebar-child-third">
                                                <li><a href="">Boston Open</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Leagues  </a>
                                    <ul class="sidebar-child-second">
                                        <li><a href="">Active</a></li>
                                        <li><a href="">NE Youth</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="text-upper"> <img src="{{ asset('src/image/iconmenu3.png') }}" />Rankings</a>
                        </li>
                        <li>
                            <a href="#" class="text-upper"> <img src="{{ asset('src/image/iconmenu4.png') }}" />Entities</a>
                            <ul class="sidebar-child-first">
                                <li><a href="">Players</a></li>
                                <li><a href="">Teams</a></li>
                                <li><a href="">Clubs</a></li>
                                <li><a href="">Referees</a></li>
                                <li><a href="">Reports</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="footer-left text-right">
                        <span>All rights reserved</span>
                        <button><img src="{{ asset('src/image/menubutton1.png') }}"></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-10 main">
                <div class="box-content">
                    <div class="header">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="main-header-menu">
                            <!-- <ul class="menu-header menu-header-left">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#" class="active">Define Competition</a></li>
                                <li><a href="#">Plan sessions</a></li>
                                <li><a href="#">Manage sessions</a></li>
                            </ul> -->
                            <ul class="menu-header menu-header-right">
                                <li class='border-right'>
                                    <a href="#" class="links-logout"> 
                                        <img src="{{ asset('src/image/avt.jpg') }}" />
                                        <span>Admin</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="links-logout" href="#">
                                        <span>Logout</span> 
                                        <i class="logout-button"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                         <div class="title">
                            <h1>Create Competition</h1>
                        </div>
                        <!-- <div class="wrapper-menu-step">
                            <ul class="menu-step-button">
                                <li class="active"><a href="#">1. Set Up</a></li>
                                <li><a href="#">2. Categories</a></li>
                                <li><a href="#">3. Signup</a></li>
                                <li><a href="#">4. Draws</a></li>
                                <li><a href="#">5. Session Planning</a></li>
                                <li><a href="#">6. Session Managing</a></li>
                            </ul>
                        </div> -->
                        </div>
                    </div>
                    <div class="content-wrapper">
                    <div class="col-sm-12 col-md-12 col-lg-12 step-button-container">
						<div class="wrapper-menu-step">
                            <ul class="menu-step-button">
                                <li class="active"><a href="#">1. Set Up</a></li>
                                <li><a href="#">2. Categories</a></li>
                                <li><a href="#">3. Signup</a></li>
                                <li><a href="#">4. Draws</a></li>
                                <li><a href="#">5. Session Planning</a></li>
                                <li><a href="#">6. Session Managing</a></li>
                            </ul>
                        </div>
                    </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 content-left-wrapper">
                            <div class="content-left">
                                <div class="row-box">
                                <div class=" row form-group">
                                    <label class="col-sm-5 col-md-5">
                                        <span>1. </span>Name of Compatition
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <input type="text" class="form-control col-sm-7 col-md-7" id="name" placeholder="Name">
                                </div>
                                <div class=" row form-group">
                                    <label class="col-sm-5 col-md-5">
                                        <span>2. </span>Competition Logo
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>                                            
                                    <div class="avatar-setup">
                                        <img src="{{ asset('src/image/avt.jpg') }}" />
                                    </div>
                                    <!-- <button type="submit" class="col-sm-3 col-md-3 btn btn-primary btn-upload">Upload</button> -->
                                    <div class="col-sm-3 col-md-3 custom-file-upload">
                                        <input type="file" name="file" id="file" class="inputfile" />
                                        <label for="file" class="label-file">Upload</label>
                                    </div>
                                </div>
                                </div>
                                <div class="row-box">
                                <div class="row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>3. </span>Competition Classification*
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <p class="col-sm-7 col-md-7 note-select">Select Classification</p>
                                    <select class="col-sm-7 col-md-7 selectpicker">
                                        <option>Senior</option>
                                        <option>Junior</option>                                                
                                    </select>
                                </div>
                                <div class=" row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>4. </span> Competition Type
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <div class="col-sm-3 col-md-3 box-checkbox">
                                        <input class="checkbox-custom" id="competition-type-1" type="checkbox" name="" checked>
                                        <label for="competition-type-1" class="checkbox-custom-label">Team</label>
                                    </div>
                                    <div class="col-sm-4 col-md-4 box-checkbox">
                                        <input class="checkbox-custom" id="competition-type-2" type="checkbox" name="" checked>
                                        <label for="competition-type-2" class="checkbox-custom-label">Individual</label>
                                    </div>
                                </div>
                                <div class=" row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>5. </span> Court Surface
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <div class="col-sm-2 col-md-2 box-checkbox">
                                        <input class="checkbox-custom" id="court-surface-1" type="checkbox" name="" checked>
                                        <label for="court-surface-1" class="checkbox-custom-label">Grass</label>
                                    </div>
                                    <div class="col-sm-2 col-md-2 box-checkbox">
                                        <input class="checkbox-custom" id="court-surface-2" type="checkbox" name="" checked>
                                        <label for="court-surface-2" class="checkbox-custom-label">Hard</label>
                                    </div>
                                    <div class="col-sm-3 col-md-3 box-checkbox">
                                        <input class="checkbox-custom" id="court-surface-3" type="checkbox" name="" checked>
                                        <label for="court-surface-3" class="checkbox-custom-label">Carpet</label>
                                    </div>
                                    <div class="col-sm-3 col-md-3 box-checkbox">
                                        <input class="checkbox-custom" id="court-surface-4" type="checkbox" name="" checked>
                                        <label for="court-surface-4" class="checkbox-custom-label">Red Clay</label>
                                    </div>
                                    <div class="col-sm-4 col-md-4 box-checkbox">
                                        <input class="checkbox-custom" id="court-surface-5" type="checkbox" name="" checked>
                                        <label for="court-surface-5" class="checkbox-custom-label">Green Clay</label>
                                    </div>
                                </div>
                                
                                <div class="row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>6. </span>Country
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <p class="col-sm-7 col-md-7 note-select">Select country</p>
                                    <select class="col-sm-7 col-md-7 selectpicker">
                                        <option>Singapore</option>
                                        <option>Viet Nam</option>                                                
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 content-right-wrapper">
                            <div class="content-right">
                                <div class="row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>7. </span>Start Date
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <input class="col-sm-4 col-md-4 form-control datepicker" id="start-date" data-provide="datepicker" >
                                </div>
                                <div class="row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>8. </span>End Date
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <input class="col-sm-4 col-md-4 form-control datepicker" id="end-date" data-provide="datepicker">
                                </div>
                                <div class="row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>9. </span>Timezone
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <select class="col-sm-7 col-md-7 selectpicker">
                                        <option>UTC-07:00</option>
                                        <option>UTC-09:00</option>
                                    </select>
                                </div>
                                <div class="row form-group ">
                                    <label class="col-sm-5 col-md-5">
                                        <span>10. </span>Club(s)
                                        <p>(Placeholder for formfield dehere...)</p>
                                    </label>
                                    <select class="col-sm-7 col-md-7 selectpicker">
                                        <option>Select Club</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>  

                                <div class="row-box-club">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                        <div class="form-group">
                                            <input type="" placeholder="Search Club" name="" class="form-control input-search-club">
                                        </div>
                                        <div id="club-control" class="mCustomScrollbar" data-mcs-theme="dark">
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-1" type="checkbox" name="" checked>
                                                     <label for="club-control-checkbox-1" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-2" type="checkbox" name="" checked>
                                                     <label for="club-control-checkbox-2" class="checkbox-custom-label">Australian Women’s Hardcourts</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-3" type="checkbox" name="" checked>
                                                     <label for="club-control-checkbox-3" class="checkbox-custom-label">Burswood Dome</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-4" type="checkbox" name="">
                                                     <label for="club-control-checkbox-4" class="checkbox-custom-label">Cooper Park</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-5" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-5" class="checkbox-custom-label">Hobart International Tennis Centre</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-6" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-6" class="checkbox-custom-label">Hope Island Resort Tennis Centre</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-7" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-7" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-8" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-8" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-9" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-9" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-10" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-10" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-11" type="checkbox" name="" >
                                                     <label for="club-control-checkbox-11" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                 <div class="col-sm-12 col-md-12 box-checkbox">
                                                     <input class="checkbox-custom club-control-checkbox" id="club-control-checkbox-12" type="checkbox" name="">
                                                     <label for="club-control-checkbox-12" class="checkbox-custom-label">Acer Arena</label>
                                                </div>
                                            </div>
                                             
                                        </div>
                                        </div>
                                        <div class="btn-add-club-container text-left">
                                            <button class="btn-add-club">Add</button>
                                        </div>
                                      <div class="panel-footer text-right">
                                        <a href="#">Create new Club</a>
                                      </div>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-sm-12 col-12 content-footer text-center">
                            <button class="btn btn-cancel" type="submit">Cancel</button>
                            <button class="btn btn-save" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
<script type="text/javascript" src="{{ url('src/js/all.js') }}"></script>
<script type="text/javascript" src="{{ url('src/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="https://use.fontawesome.com/6fac2730d4.js"></script>
<script type="text/javascript">
    jQuery('.datepicker').datepicker({
        format: 'dd M yyyy',
        startDate: '-0d'
    });

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd;
    }

    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var MM = month[today.getMonth()+1];
    var today = dd+' '+ MM +' '+yyyy;    

    document.getElementById('start-date').value = today;
    document.getElementById('end-date').value = today;

    $("#club-control").mCustomScrollbar({
        axis:"y" 
    });

</script>
</body>

</html>