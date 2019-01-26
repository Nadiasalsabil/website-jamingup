<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Jammingup Studio</title>
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="{{ url("assetjamming/css/font-awesome.min.css") }}">
          <link rel="stylesheet" type="text/css" href="{{ url("assetjamming/css/animate.min.css") }}">
          <link href="{{ url("assetjamming/css/bootstrap.min.css") }}" rel="stylesheet">
          <link type="text/css" rel="stylesheet" href="{{ url("assetjamming/css/carousel.css") }}" />
          <link rel="stylesheet" href="{{ url("assetjamming/css/isotope/style.css") }}">
          <link href="{{ url("assetjamming/css/style.css") }}" rel="stylesheet">
          <link href="{{ url("assetjamming/css/responsive.css") }}" rel="stylesheet">


           </head>

<body >

   
    <section id="header">
       
            <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                <div class="container">
                    <nav class="navbar navbar-default zero_mp ">
                       
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand custom_navbar-brand" href="#"><br/>
                            	<img src="{{ url("assetlogin/images/logo/2log.png") }}"></a>
                        </div>
                       
                        <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main_menu">
                                <li ><a href="#header">Home <span class="sr-only" >(current)</span></a></li>
                                <li><a href="#welcome">Article</a></li>
                                <li><a href="#portfolio">project</a></li>
                               
                                <li><a href="#event">event</a></li>
                               
                                <li><a href="#blog">blog</a></li>
                               
                            </ul>
                        </div>
                       
                    </nav>
                   
                </div>
               
            </div>
           
        </div>
       
    </section>
    

       @yield('_content') 


      <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ 2018 - Jammingup Studio <span><a href="">&#9798;</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>Jammingup Studio Indonesia &copy;2018</p><br>
                            
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="{{ url("assetjamming/js/jquery-1.12.3.min.js") }}"></script>

        <!--Counter UP Waypoint-->
        <script src="{{ url("assetjamming/js/waypoints.min.js") }}"></script>
        <!--Counter UP-->
        <script src="{{ url("assetjamming/js/jquery.counterup.min.js") }}"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="{{ url("assetjamming/js/gmaps.min.js") }}"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="{{ url("assetjamming/js/isotope/min/scripts-min.js") }}"></script>
        <script src="{{ url("assetjamming/js/isotope/cells-by-row.js") }}"></script>
        <script src="{{ url("assetjamming/js/isotope/isotope.pkgd.min.js") }}"></script>
        <script src="{{ url("assetjamming/js/isotope/packery-mode.pkgd.min.js") }}"></script>
        <script src="{{ url("assetjamming/js/isotope/scripts.js") }}"></script>


        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="{{ url("assetjamming/js/jquery.localScroll.min.js") }}"></script>
        <script src="{{ url("assetjamming/js/jquery.scrollTo.min.js") }}"></script>
        <!--WOW With Animation-->
        <script src="{{ url("assetjamming/js/wow.min.js") }}"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ url("assetjamming/js/bootstrap.min.js") }}"></script>
        <!-- Custom JavaScript-->
        <script src="{{ url("assetjamming/js/main.js") }}"></script>
    </body>

</html>
  