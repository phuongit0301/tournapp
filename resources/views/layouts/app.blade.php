<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.min.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">
                <div class="sidebar-logo">Tourapps</div>
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav" style="margin-left:0;">
                        <li>
                          <a href="#"><i class="sb sb-original"></i>ORGANIZATION</a>
                          <ol>
                            <li><a href="#" class="circle-blue">Configuration</a></li>
                            <li><a href="#" class="circle-blue">Site Content</a></li>
                          </ol>
                        </li>

                        <li>
                          <a href="#"><i class="sb sb-competitions"></i>COMPETITIONS</a>
                          <ol>
                            <li>
                              <a href="#" class="circle-blue">Tournaments</a>
                              <ul>
                                <li>
                                  <a href="#">Active</a>
                                  <ul>
                                    <li><a href="#">NY State Open</a></li>
                                    <li><a href="#">DESIGN</a></li>
                                    <li><a href="#">PREPARATION</a></li>
                                    <li>
                                      <a href="#">OPERATION</a>
                                      <ul>
                                        <li><a href="#">Session Management</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="#">PUBLISHING</a></li>
                                    <li><a href="#">Boston Open</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>

                            <li>
                              <a href="#" class="circle-blue">Leages</a>
                              <ul>
                                <li>
                                  <a href="#">Active</a>
                                  <ul>
                                    <li><a href="#">NE Youth</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ol>
                        </li>
                        <li>
                          <a href="#"><i class="sb sb-rankings"></i>RANKINGS</a>
                          <ol>
                            <li><a href="#" class="circle-blue">Manage Rankings</a></li>
                          </ol>
                        </li>
                        <li>
                          <a href="#"><i class="sb sb-entities"></i>ENTITIES</a>
                          <ol>
                            <li><a href="#" class="circle-blue">Players</a></li>
                            <li><a href="#" class="circle-blue">Teams</a></li>
                            <li><a href="#" class="circle-blue">Clubs/Venues</a></li>
                            <li><a href="#" class="circle-blue">Referees</a></li>
                            <li><a href="#" class="circle-blue">Coaches</a></li>
                          </ol>
                        </li>
                        <li><a href="#"><i class="sb sb-reports"></i>REPORTS</a></li>
                    </ul>
                </div><!--end sidebar-wrapper-->
              </div>
              <div class="col-md-9">@yield('content')</div>
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
