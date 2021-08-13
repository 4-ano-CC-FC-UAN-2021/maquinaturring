<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Code Editor | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/educate-custon-icon.css')}}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
        <!-- codemirror CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/code-editor/codemirror.css')}}">
        <link rel="stylesheet" href="{{asset('css/code-editor/ambiance.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Code Editor Start -->
<main>
        <div class="code-editor-area mg-b-15">
            <div class="container-fluid">
                
                @if (session('msg'))
                <div class="alert alert-danger">
                    <ul>
                            <li>{{ session('msg') }}</li>
                       
                    </ul>
                </div>
            @endif
                <div class="row">
                    <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                        <div class="code-editor-single responsive-mg-b-30">
                            <form method="post" action="{{route('lexico')}}">
                                @csrf
                                <h2></h2>
                                <textarea id="code1" name="codigo">
                                    
                                </textarea>
                                <br><br>
                                <input type="text" class="btn btn-primary" name="palavra" placeholder="Palavra...">
                                <br><br>
                                <input class="btn btn-sm btn-primary login-submit-cs" type="submit" value="Interpretar">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>    
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{asset("js/vendor/jquery-1.12.4.min.js")}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <!-- code editor JS
		============================================ -->
    <script src="{{asset("js/code-editor/codemirror.js")}}"></script>
    <script src="{{asset("js/code-editor/code-editor.js")}}"></script>
    <script src="{{asset("js/code-editor/code-editor-active.js")}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset("js/tab.js")}}"></script>

    <!-- main JS
		============================================ -->
    <script src="{{asset("js/main.js")}}"></script>
</body>

</html>