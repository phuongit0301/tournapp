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
                                        <span>Brad Milosevic</span>
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
                            <h1>Organization Configuration</h1>
                        </div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="col-sm-12 col-md-12 col-lg-12 container">
                            <form class="form-horizontal">
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Organization Name:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="name" value="Tennis Australia">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Sport:</label>
                                        <div class="col-sm-5">
                                            <span>Tennis</span>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Logo:</label>
                                        <div class="col-sm-5">
                                           <div class="avatar-setup">
                                            <img src="{{ asset('src/image/avt.jpg') }}" />
                                            </div>
                                        <!-- <button type="submit" class="col-sm-3 col-md-3 btn btn-primary btn-upload">Upload</button> -->
                                        <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                                            <input type="file" name="file" id="file" class="inputfile" />
                                            <label for="file" class="label-file">Change Logo</label>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                                            <button class="btn-remove">Remove Logo</button>
                                        </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Person in Charge:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="person-in-charge" >
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Position:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="position" >
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Phone:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="phone" >
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Email:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="email" >
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Address:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="address" >
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">City:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="city" >
                                        </div>
                                        <label for="name" class="col-sm-1 col-md-1 control-label text-left">State:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="state" >
                                        </div>
                                </div>
                                 <div class="form-group">
                                        <label for="name" class="col-sm-2 col-md-2 control-label text-left">Zip:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="zip" >
                                        </div>
                                        <label for="name" class="col-sm-1 col-md-1 control-label text-left">Country:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="country" >
                                        </div>
                                </div>
                            </form>
                            <div class="col-sm-12 col-12 content-footer text-center">
                                <button class="btn btn-cancel" type="submit">Cancel</button>
                                <button class="btn btn-save" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
<script type="text/javascript" src="{{ url('src/js/all.js') }}"></script>
</body>

</html>
