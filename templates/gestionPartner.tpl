<!DOCTYPE>
<html>
<head>
    
<title> Control partner </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
<meta name="author" content="Codrops" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js"></script>
<script src = "js/app/viewmodel/partnerViewModel.js"></script>
<!--link rel="shortcut icon" href="../favicon.ico"-->
<link rel="stylesheet" type="text/css" href="views/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="views/css/demo.css" />
<link rel="stylesheet" type="text/css" href="views/css/component.css" />
<script src="views/js/modernizr.custom.js"></script>

</head>

<body>

    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li class="gn-search-item">
                                <input placeholder="Search" type="search" class="gn-search">
                                <a class="gn-icon gn-icon-search"><span>Search</span></a>
                            </li>
                            <li>
                                <a class="gn-icon gn-icon-download">Downloads</a>
                                <ul class="gn-submenu">
                                    <li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
                                    <li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
                                </ul>
                            </li>
                            <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                            <li><a class="gn-icon gn-icon-help">Help</a></li>
                            <li>
                                <a class="gn-icon gn-icon-archive">Archives</a>
                                <ul class="gn-submenu">
                                    <li><a class="gn-icon gn-icon-article">Articles</a></li>
                                    <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                                    <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /gn-scroller -->
                </nav>
            </li>
            <li><a href="http://tympanus.net/codrops">Codrops</a></li>
            <li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
            <li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li>
        </ul>
        <header>
            <h1>Google Nexus Website Menu <span>A sidebar menu as seen on the <a href="http://www.google.com/nexus/index.html">Google Nexus 7</a> page</span></h1>	
        </header> 
    </div><!-- /container -->
    <script src="views/js/classie.js"></script>
    <script src="views/js/gnmenu.js"></script>
    <script>
        new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>

	<!--div id="ko">
		<input type="text" name="CHE" class="form-control" data-bind="value:$root.valor,valueUpdate:'keyup'">
		<button class="btn" data-bind="click:$root.mostrarObservable">VO CABEZA</button>
		<p data-bind="text:$root.valor"></p>
	</div-->

</body>
</html>