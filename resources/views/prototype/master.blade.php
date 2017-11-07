<!DOCTYPE html>
<style type="text/css">

    .btn-hamburger{
        display: none;
    }
    .content-wrapper img{
        /*height: 100vh !important;*/
        max-width: 80% !important;
    }

    .sidebar-child-first{
        display: none;
    }
    .sidebar-child-first.active{
        display: block;
    }
    
    .sidebar-child-four{
        display: none;
    }
    .sidebar-child-four.active{
        display: block;
    }
</style>
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

<body id="prototype-body">
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
                        <ul class="sidebar"  style="display: none;">
                            <li>
                                <a href="#" class="text-upper dropdown-toggle" data-toggle-slide> <img src="{{ asset('src/image/iconmenu1.png') }}" />Organization </a>
                                <ul class="sidebar-child-first" role="menu">
                                    <li><a href="{{url('/get_prototype?id=3')}}" id="3">Configuration</a></li>
                                    <li><a href="#">Site Content</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="text-upper dropdown-toggle" data-toggle-slide>
                                    <img src="{{ asset('src/image/iconmenu2.png') }}" /> Competitions
                                </a>
                                <ul class="sidebar-child-first" role="menu">
                                    <li><a class="have-active" id="5" href="{{url('/get_prototype?id=5')}}">Tournaments</a>
                                        <ul class="sidebar-child-second">
                                            <li>
                                                <a href="#" id="1" class="dropdown-toggle" data-toggle-slide>
                                                    NY State Open<span class="caret"></span>
                                                </a>
                                                <ul class="sidebar-child-third" role="menu">
                                                    <li><a class="text-upper dropdown-toggle" href="#" data-toggle-slide>Design <span class="caret"></span></a>
                                                        <ul class="sidebar-child-four" role="menu">
                                                            <li><a href="{{url('/get_prototype?id=6')}}" id="6">Setup</a></li>
                                                            <li><a href="{{url('/get_prototype?id=14')}}" id="14">Categories</a></li>
                                                            <li><a href="{{url('/get_prototype?id=28')}}" id="28">Signup</a></li>

                                                        </ul>
                                                    </li>
                                                    <li><a class="text-upper dropdown-toggle" data-toggle-slide href="#">Preparation <span class="caret"></span></a>
                                                        <ul class="sidebar-child-four" role="menu">
                                                            <li><a href="{{url('/get_prototype?id=24')}}" id="24">Sign up Managing</a></li>
                                                            <li><a href="{{url('/get_prototype?id=35')}}" id="35">Stages</a></li>
                                                            <li><a href="{{url('/get_prototype?id=37')}}" id="37">Draws</a></li>
                                                            <li><a href="{{url('/get_prototype?id=44')}}" id="44">Session Planning</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="text-upper dropdown-toggle" data-toggle-slide href="#">Operation <span class="caret"></span></a>
                                                        <ul class="sidebar-child-four" role="menu">
                                                            <li><a href="{{url('/get_prototype?id=53')}}" id="53">Session Managing</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="text-upper dropdown-toggle" data-toggle-slide href="#">Publishing <span class="caret"></span></a>
                                                        <ul class="sidebar-child-four" role="menu">
                                                            <li><a href="#">Dashboard</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle-slide>Boston Open <span class="caret"></span>
                                                </a>
                                                <ul class="sidebar-child-third " role="menu">
                                                    <li><a href="#">test</a></li>
                                                    <li><a href="#">test</a></li>
                                                    <li><a href="#">test</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a style="cursor: context-menu;" class="have-active">Leagues  </a>
                                        <ul class="sidebar-child-second">
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle-slide>
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
                                <a href="#" id="ranking-menu" class="text-upper" data-toggle-slide> <img src="{{ asset('src/image/iconmenu3.png') }}" />Rankings</a>
                                <ul class="sidebar-child-first" role="menu">
                                    <li><a href="#">Manage Rankings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="text-upper" data-toggle-slide> <img src="{{ asset('src/image/iconmenu4.png') }}" />Entities</a>
                                <ul class="sidebar-child-first" role="menu">
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

                    <div class="content-wrapper">

                      @yield('content')

                  </div>
              </div>
          </div>
      </div>

  </div>
  @yield('modals')   
</body>
{{-- <script type="text/javascript" src="{{ url('src/js/all.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ url('src/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
{{-- <script type="text/javascript" src="{{ url('src/js/jquery.validate.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ url('src/js/jquery.connections.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ url('src/plugin/Semantic-UI-CSS-master/semantic.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ url('src/plugin/treant-js-master/Treant.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ url('src/plugin/treant-js-master/vendor/raphael.js') }}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.7.11/go-debug.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.7.11/go.js"></script> --}}

<script src="https://use.fontawesome.com/6fac2730d4.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        var page_id = getUrlParameters("id", url, true);
        var ref_id = get_ref_menu_id(page_id);
        console.log(ref_id);
        if(ref_id != 0){
            $(".sidebar a").each(function() {
            // checks if its the same on the address bar
            if ($(this).attr('id') == ref_id) {
                    $(this).closest("a").addClass("active");
                    $(this).parents("ul").each(function(){
                        if($(this).attr('class') != "sidebar" && $(this).attr('class') != "sidebar-child-second"){
                            // $(this).slideToggle();
                            $(this).css('display', 'block');
                        }
                    });
                }
            });
        }

    });
        setTimeout(function() {
            $('.sidebar').css('display', 'block');
        }, 1);
        $('[data-toggle-slide]').on('click', function(e) {
            e.preventDefault();
        $(this).next('ul').slideToggle();
        $(this).find('span').first().toggleClass('up');

    });

    $("#left-sidebar-scroll").mCustomScrollbar({
        axis:"y" 
    });
});

    function get_ref_menu_id(slide_id){
        var menu_3 = ['3', '4'];
        var menu_5 = ['5', '7', '8', '9', '11', '12', '13'];
        var menu_6 = ['6'];
        var menu_14 = ['14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
        var menu_24 = ['24', '25', '10', '27', '101', '102', '103', '26'];
        var menu_28 = ['28', '29', '30', '65', '66', '31', '32', '33', '34'];
        var menu_35 = ['35', '36', '67'];
        var menu_37 = ['37', '38', '39', '40', '41', '42', '43'];
        var menu_44 = ['44', '45', '46', '47', '48', '49', '50', '51', '52'];
        var menu_53 = ['53', '54', '55', '107', '57', '106', '56', '108'];
        if(jQuery.inArray(slide_id, menu_3) != -1) {
            return 3;
        }
        if(jQuery.inArray(slide_id, menu_5) != -1) {
            return 5;
        }
        if(jQuery.inArray(slide_id, menu_6) != -1) {
            return 6;
        }
        if(jQuery.inArray(slide_id, menu_14) != -1) {
            return 14;
        }
        if(jQuery.inArray(slide_id, menu_24) != -1) {
            return 24;
        }
        if(jQuery.inArray(slide_id, menu_28) != -1) {
            return 28;
        }
        if(jQuery.inArray(slide_id, menu_35) != -1) {
            return 35;
        }
        if(jQuery.inArray(slide_id, menu_37) != -1) {
            return 37;
        }
        if(jQuery.inArray(slide_id, menu_44) != -1) {
            return 44;
        }
        if(jQuery.inArray(slide_id, menu_53) != -1) {
            return 53;
        }
        return 0;

    }

    function getUrlParameters(parameter, staticURL, decode){

       var currLocation = (staticURL.length)? staticURL : window.location.search,
       parArr = currLocation.split("?")[1].split("&"),
       returnBool = true;

       for(var i = 0; i < parArr.length; i++){
        parr = parArr[i].split("=");
        if(parr[0] == parameter){
            return (decode) ? decodeURIComponent(parr[1]) : parr[1];
            returnBool = true;
        }else{
            returnBool = false;            
        }
    }

    if(!returnBool) return false;  
}
</script>
</body>

</html>