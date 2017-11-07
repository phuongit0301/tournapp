<!DOCTYPE html>
<html>

<head>
    <title>Session Planning</title>
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
</head>

<body>
    <div id="SessionPlanningApph" class="tournapps session-planning-container">
    </div>

    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
