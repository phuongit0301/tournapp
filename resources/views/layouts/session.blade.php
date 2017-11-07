<!DOCTYPE html>
<html>

<head>
    <title>Session Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/session_management.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/vis.min.css') }}" />
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script type="text/javascript">
        let APP_URL = {!! json_encode(url('/')) !!};
    </script>

</head>

<body>
    <div id="app" class="tournapps session-management-container"></div>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    <script src="https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js"></script>
    <script type="text/javascript" src="{{ asset('/js/session-management.js') }}"></script>
</body>

</html>
