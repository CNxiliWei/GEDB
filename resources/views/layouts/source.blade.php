<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, user-scalable=no">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="keywords" content="PHP,Laravel,Gene,GEDB,魏婷,生物,基因">
        <meta name="description" content="关于基因表达呈现的工具">
        <title>@section('title') GEDB平台 @show</title>

        <link rel="stylesheet" href="{{asset('/css/app.css')}}">

        <style media="screen">
            html, body{height: 100%; margin: 0px; padding: 0px;background-color: #eee;}
            ul{list-style-type: none;}
            .row-of-nav{margin-left: 0px; margin-right: 0px;}
            .nav-item{text-align: center;}
            #top-nav{margin-bottom: 0px;}
        </style>
        @section('style')

        @show
    </head>
    <body>

        <nav id="top-nav" class="navbar navbar-default navbar-md nav-fixed-top bg-success" role="navigation">
            <div class="contain-fluid">
                <div class="row row-of-nav">
                    <ul class="navbar-nav col-md-12">
                        <li class="col-md-2">
                            <h2><a href="#"> GEDB</a></h2>
                        </li>
                        <div class="col-md-5">
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/homepage/index')}}">Home</a></h3>
                            </li>
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/search/index')}}">Search</a></h3>
                            </li>
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/expression/index')}}">Expression</a></h3>
                            </li>
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/markers/index')}}">Markers</a></h3>
                            </li>
                        </div>
                        <div class="col-md-5">
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/network/index')}}">Network</a></h3>
                            </li>
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/download/index')}}">Download</a></h3>
                            </li>
                            <li class="nav-item col-md-3">
                                <h3><a class="nav-link" href="{{url('/front/about/index')}}">About</a></h3>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <nav id="bottom-nav" class="navbar navbar-md bg-dark navbar-default navbar-fixed-bottom" role="navigation">
            <div class="contain-fluid">
                <div class="row row-of-nav">
                    <ul class="navbar-nav col-md-12">
                        <li class="col-md-2">
                            <h2><a class="nav-brand" href="#"> GEDB</a></h2>
                        </li>
                        <li class="nav-item col-md-2">
                            <h3><a class="nav-link" href="#">link 1</a></h3>
                        </li>
                        <li class="nav-item col-md-2">
                            <h3><a class="nav-link" href="#">link 1</a></h3>
                        </li>
                        <li class="nav-item col-md-2">
                            <h3><a class="nav-link" href="#">link 1</a></h3>
                        </li>
                        <li class="nave-item col-md-2">
                            <h3><a class="nav-link" href="#">link 1</a></h3>
                        </li>
                        <li class="nave-item col-md-2">
                            <h3><a class="nav-link" href="#">link 1</a></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @section('content')
        @show

        <script src="js/app.js"></script>
        <script type="text/javascript">
            window.axios.defaults.headers.common = {
                'X-Requested-With': 'XMLHttpRequest',
            };
        </script>

        @section('js')
        @show
    </body>
</html>
