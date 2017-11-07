<!DOCTYPE html>
<html>

<head>
    <title>Tournapps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/modules.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugin/Semantic-UI-CSS-master/semantic.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('src/plugin/jOrgChart-master/example/css/jquery.jOrgChart.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('src/plugin/treant-js-master/Treant.css') }}">
</head>

<body>
    <div class="tournapps" >
        <div class="page-wrapper">
            <div class="col-sm-3 col-md-2 sidebar-wrapper">
                <div class="box-left">
                    <div class="logo">
                        <img src="{{ asset('/src/image/logo1x.png')}}" />
                    </div>
                    <div class="logo-small">
                        <img src="{{ asset('/src/image/logo-icon-small.png')}}" />
                    </div>
                    <div class="mCustomScrollbar" id="left-sidebar-scroll" data-mcs-theme="light">
                        <ul class="sidebar">
                            <li>
                                <a href="#" class="text-upper"> <img src="{{ asset('src/image/iconmenu1.png') }}" />Organization </a>
                                    <ul class="sidebar-child-first">
                                    <li><a href="{{url('/organization')}}">Configuration</a></li>
                                    <li><a href="#">Site Content</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="text-upper">
                                    <img src="{{ asset('src/image/iconmenu2.png') }}" /> Competitions
                                </a>
                                <ul class="sidebar-child-first">
                                    <li><a class="have-active" href="{{url('/tournament')}}">Tournaments</a>
                                        <ul class="sidebar-child-second">
                                            <li>
                                                <a href="#" id="1" class="sidebar-red-text dropdown-toggle" data-toggle-slide>
                                                    NY State Open<span class="caret"></span>
                                                </a>
                                                    <ul class="sidebar-child-third 
                                                    <?php 
                                                        if(isset($data['tournament_id']))
                                                        {
                                                            if($data['tournament_id'] == $_GET['t_id']){
                                                                echo 'active';
                                                            }
                                                        }
                                                    ?>" role="menu">
                                                        <li><a href="{{url('/competition_setup?t_id=1')}}">Setup</a></li>
                                                        <li><a href="{{url('/competition_category?t_id=1')}}">Categories</a></li>
                                                        <li><a href="#">Signup</a></li>
                                                        <li><a href="{{url('/competition_stages?t_id=1')}}">Stages</a></li>
                                                        <li><a href="#">Draws</a></li>
                                                        <li><a href="#">Session Planning</a></li>
                                                        <li><a href="#">Session Managing</a></li>
                                                        <li><a class="text-upper dropdown-toggle" data-toggle-slide href="#">Design <span class="caret"></span></a>
                                                            <ul class="sidebar-child-third" role="menu">
                                                                <li><a href="{{url('/competition_setup?t_id=1')}}">Setup</a></li>
                                                                <li><a href="{{url('/competition_category?t_id=1')}}">Categories</a></li>
                                                                <li><a href="#">Signup</a></li>
                                                                <li><a href="{{url('/competition_stages?t_id=1')}}">Stages</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="sidebar-red-text dropdown-toggle" data-toggle-slide>Boston Open <span class="caret"></span>
                                                </a>
                                                <ul class="sidebar-child-third " role="menu">
                                                    <li><a href="#">test</a></li>
                                                    <li><a href="#">test</a></li>
                                                    <li><a href="#">test</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="have-active" href="{{url('/leagues')}}">Leagues  </a>
                                        <ul class="sidebar-child-second">
                                            <li>
                                                <a href="#" class="sidebar-red-text dropdown-toggle" data-toggle-slide>
                                                    NE Youth <span class="caret"></span>
                                                </a>
                                                <ul class="sidebar-child-third dropdown-menu" role="menu">
                                                    <li><a href="#">test</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="ranking-menu" class="text-upper"> <img src="{{ asset('src/image/iconmenu3.png') }}" />Rankings</a>
                            </li>
                            <li>
                                <a href="#" class="text-upper"> <img src="{{ asset('src/image/iconmenu4.png') }}" />Entities</a>
                                <ul class="sidebar-child-first">
                                    <li><a href="#">Players</a></li>
                                    <li><a href="#">Teams</a></li>
                                    <li><a href="#">Clubs</a></li>
                                    <li><a href="#">Referees</a></li>
                                    <li><a href="#">Coaches</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="text-upper"> <img src="{{ asset('src/image/report-icon.png') }}" />Reports</a>   
                            </li>
                        </ul>
                    </div>
                    <div class="footer-left text-center">
                        <span>All rights reserved</span>
                    </div>
                </div>
            </div>
            <button class="btn-hamburger"><img src="{{ asset('src/image/menubutton1.png') }}"></button>
            {{-- <div class="col-sm-9 col-md-10 main box_competition_category"> --}}
            <div class="col-sm-9 col-md-10 main">
                <div class="box-content">
                    <div class="header">
                        <div class="main-header-menu">
                            <ul class="menu-header menu-header-right">
                                <li class='border-right'>
                                    <a href="#" class="links-logout"> 
                                        <img src="{{ asset('src/image/avt.jpg') }}" />
                                        <span>@if(isset($data['current_user'])){{$data['current_user']->first_name}} {{$data['current_user']->last_name}}@endif</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="links-logout" href="{{url('/logout')}}">
                                        <span>Logout</span> 
                                        <i class="logout-button"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="title">
                            <h1>
                                @yield('title')
                                <!-- Create Competition -->
                            </h1>
                            <h3>
                                @yield('tournament-name')
                            </h3>
                        </div>
                        @yield('step-button')
                    </div>
                    <div class="content-wrapper">

                      @yield('content')

                  </div>
              </div>
          </div>
      </div>

  </div>
  @yield('modals')   
</body>
<script type="text/javascript" src="{{ url('src/js/all.js') }}"></script>
<script type="text/javascript" src="{{ url('src/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ url('src/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ url('src/js/jquery.connections.js') }}"></script>
<script type="text/javascript" src="{{ url('src/plugin/Semantic-UI-CSS-master/semantic.min.js') }}"></script>
<script type="text/javascript" src="{{ url('src/plugin/treant-js-master/Treant.js') }}"></script>
<script type="text/javascript" src="{{ url('src/plugin/treant-js-master/vendor/raphael.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.7.11/go-debug.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.7.11/go.js"></script> --}}

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

    // document.getElementById('start-date').value = today;
    // document.getElementById('end-date').value = today;

    $("#left-sidebar-scroll").mCustomScrollbar({
        axis:"y" 
    });

</script>
</body>

</html>