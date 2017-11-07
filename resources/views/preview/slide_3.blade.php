<!DOCTYPE html>
<style type="text/css">
    body{
        padding: 0;
        margin: 0;
    }

    .image-container{
        position: relative;
    }
    .image-container img{
        width: 70%;
    }
    #btn-1{
        width: 10%;
        height: 50px;
        background: none;
        position: absolute;
        top: 4%;
        left: 7%;
    }
    #btn-2{
        width: 11%;
        height: 105px;
        background: none;
        position: absolute;
        top: 10%;
        left: 7%;
    }
    #btn-3{
        width: 11%;
        height: 91px;
        background: none;
        position: absolute;
        top: 21%;
        left: 7%;
    }
    #btn-4{
        width: 11%;
        height: 91px;
        background: none;
        position: absolute;
        top: 31%;
        left: 7%;
    }

    #btn-5{
        width: 11%;
        height: 91px;
        background: none;
        position: absolute;
        top: 41%;
        left: 7%;
    }
    #btn-6{
        width: 11%;
        height: 98px;
        background: none;
        position: absolute;
        top: 51%;
        left: 7%;
    }

    #btn-7{
        width: 11%;
        height: 90px;
        background: none;
        position: absolute;
        top: 62%;
        left: 7%;
    }
    #btn-8{
        width: 11%;
        height: 90px;
        background: none;
        position: absolute;
        top: 72%;
        left: 7%;
    }
    #btn-9{
        width: 11%;
        height: 90px;
        background: none;
        position: absolute;
        top: 82%;
        left: 7%;
    }

</style>
<html>

<head>
    <title>Tournapps</title>
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 image-container">
      <img src="{{ asset('/src/image/preview/2-site-content.jpg')}}">
      <a href="{{url('/get_preview?id=1')}}">
            <div id="btn-1"></div>
        </a>
        <a href="{{url('/get_preview?id=2')}}">
            <div id="btn-2"></div>
        </a>
        <a href="{{url('/get_preview?id=3')}}">
            <div id="btn-3"></div>
        </a>
        <a href="{{url('/get_preview?id=4')}}">
            <div id="btn-4"></div>
        </a>
        <a href="{{url('/get_preview?id=5')}}">
            <div id="btn-5"></div>
        </a>
        <a href="{{url('/get_preview?id=6')}}">
            <div id="btn-6"></div>
        </a>
        <a href="{{url('/get_preview?id=7')}}">
            <div id="btn-7"></div>
        </a>
        <a href="{{url('/get_preview?id=8')}}">
            <div id="btn-8"></div>
        </a>
        <a href="{{url('/get_preview?id=9')}}">
            <div id="btn-9"></div>
        </a>
    </div>
</body>

</body>

</html>