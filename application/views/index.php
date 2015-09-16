<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MTLC Home</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css"><!-- theme styles -->

  </head>
  
  <body role="document">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
        <div class="row"><!-- row -->
        
            <?php include 'include/top_right.php';?>
        
            <div class="col-lg-12">
        
                <div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="<?php echo base_url(); ?>index.php/home" title="Home Page">
                            <img src="<?php echo base_url(); ?>img/site-logo.png" alt="Site Logo" class="img-responsive"/>
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            
                </div><!-- site logo end -->

                <nav id="k-menu" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">

                        <li>
                            <a href="#" class="Pages Collection" title="Our Provided Services">Services</a>
                            <ul class="sub-menu">
                                <li><a href="news-single.html">Acquisitions &amp; Mergers</a></li>
                                <li><a href="events-single.html">Internal Audit</a></li>
                                <li><a href="courses-single.html">Benchmarking</a></li>
                                <li><a href="gallery-single.html">Bookkeeping/Accounting</a></li>
                                <li><a href="news-stacked.html">Budgeting</a></li>
                                <li><a href="search-results.html">Cash flow Forecasting</a></li>
                                <li><a href="search-results.html">Charitable Trusts</a></li>
                                <li><a href="search-results.html">Estate Planning</a></li>
                                <li><a href="#">Farm Accounting</a></li>
                                <li><a href="#">Financing</a></li>
                                <li><a href="#">Insolvency</a></li>
                                <li><a href="#">Management Consulting</a></li>
                                <li><a href="#">Office Duties</a></li>
                                <li><a href="#">Payroll</a></li>
                                <li><a href="#">Portfolio Management</a></li>
                                <li><a href="#">Rental Property</a></li>
                                <li><a href="#">Software Solutions</a></li>
                                <li><a href="#">Start-up</a></li>
                                <li><a href="#">Strategic Planning</a></li>
                                <li><a href="#">Succession Planning</a></li>
                                <li><a href="#">Taxation</a></li>
                                <li><a href="#">Trusts</a></li>
                                <li><a href="#">Valuations</a></li>
                                <li><a href="#">Accounting Software</a></li>
                                <li><a href="#">Business for Sale</a></li>
                                <li><a href="#">Tax</a></li>
                                <li><a href="#">VAT</a></li>
                                <li><a href="#">IRC</a></li>
                                <li><a href="#">ERC</a></li>
                                <li><a href="#">BOI</a></li>
                                <li><a href="#">BEPZA</a></li>
                                <li><a href="#">RJSC</a></li>
                                <li><a href="#">BSTI</a></li>
                                <li><a href="#">Trade License</a></li>
                                <li><a href="#">Fire License</a></li>
                                <li><a href="#">Environmental Clearance</a></li>
                                <li><a href="#">Utility Facilitation</a></li>
                                <li><a href="#">Land Records &amp; Registration</a></li>
                                <li><a href="#">Trade Mark</a></li>
                                <li><a href="#">Patent/Design</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">Registration of Company</a></li>
                                <li><a href="#">Partnership</a></li>
                                <li><a href="#">Society/NGO/Cooperatives, Arbitration, Project Profile etc.</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="Pages Collection" title="Our Consultancy Services">Business Advisory</a>
                            <ul class="sub-menu">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html" title="How things work">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="#">Company Profile</a></li>
                                <li>
                                    <a href="#">Our People</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Board of Directors</a></li>
                                        <li><a href="#">Company Secretary</a></li>
                                        
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html" title="Office Contacts">Contact Us</a>
                        </li>
                    </ul>
        
                </nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->
    
    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->

            <div class="row no-gutter fullwidth"><!-- row -->
            
                <div class="col-lg-12 clearfix"><!-- featured posts slider -->
                
                    <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->
                    
                        <ol class="carousel-indicators"><!-- Indicators -->
                            <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-featured" data-slide-to="1"></li>
                            <li data-target="#carousel-featured" data-slide-to="2"></li>
                            <li data-target="#carousel-featured" data-slide-to="3"></li>
                            <li data-target="#carousel-featured" data-slide-to="4"></li>
                        </ol><!-- Indicators end -->
                    
                        <div class="carousel-inner"><!-- Wrapper for slides -->
                        
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>img/slide-3.jpg" alt="Image slide 3" />
                                <div class="k-carousel-caption pos-1-3-right scheme-dark">
                                	<div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                        	We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="<?php echo base_url(); ?>img/slide-2.jpg" alt="Image slide 2" />
                                <div class="k-carousel-caption pos-1-3-left scheme-light">
                                	<div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                        	We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="<?php echo base_url(); ?>img/slide-1.jpg" alt="Image slide 1" />
                                <div class="k-carousel-caption pos-2-3-right scheme-dark">
                                	<div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                        	We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                        <p>
                                        	<a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="<?php echo base_url(); ?>img/slide-4.jpg" alt="Image slide 4" />
                                <div class="k-carousel-caption pos-2-3-left scheme-light">
                                	<div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                        	We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                        <p>
                                        	<a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="<?php echo base_url(); ?>img/slide-5.jpg" alt="Image slide 5" />
                                <div class="k-carousel-caption pos-c-2-3 scheme-dark no-bg">
                                	<div class="caption-content">
                                        <h3 class="caption-title title-giant">Learning makes us stronger for life</h3>
                                        <p>
                                        	We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                        <p>
                                        	<a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div><!-- Wrapper for slides end -->
                    
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        <!-- Controls end -->
                        
                    </div><!-- featured posts slider wrapper end -->
                        
                </div><!-- featured posts slider end -->

                
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-4 col-md-4"><!-- upcoming events wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                    	<ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_up_events"><!-- widgets list -->
                    
                                <h1 class="title-widget">Upcoming Events</h1>
                                
                                <ul class="list-unstyled">
                                
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="Annual alumni game">Annual alumni game</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Jul 25, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                                        </div>
                                        
                                        <p>
                                        Fusce condimentum pulvinar mattis. Nunc condimentum sapien sit amet odio vulputate, nec suscipit orci pharetra... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                    </li>
                                    
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="School talents gathering">School talents gathering</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Aug 25, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                                        </div>
                                        
                                        <p>
                                        Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                    </li>
                                    
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="#" title="School talents gathering">Campus "Open Doors"</a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                            <div class="up-event-date">Sep 04, 2015</div><div class="up-event-date">Sep 11, 2015</div>
                                        </div>
                                        
                                        <p>
                                        Donec fringilla lacinia laoreet. Vestibulum ultrices blandit tempor. Aenean magna elit, varius eget quam a, posuere... <a href="#" class="moretag" title="read more">MORE</a> 
                                        </p>
                                    
                                    </li>
                                
                                </ul>
                            
                            </li><!-- widgets list end -->
                        
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- upcoming events wrapper end -->


                <?php include 'include/side_bar.php'; ?>
                
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    
    
    <?php include 'include/footer.php';?>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>jQuery/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>jQuery/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Drop-down -->
    <script src="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.js"></script>
    
    <!-- Fancybox -->
	<script src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    <script src="<?php echo base_url(); ?>js/jquery.fitvids.js"></script>
    
    <!-- Audio player -->
	<script src="<?php echo base_url(); ?>js/audioplayer/audioplayer.min.js"></script>
    
    <!-- Pie charts -->
    <script src="<?php echo base_url(); ?>js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Theme -->
    <script src="<?php echo base_url(); ?>js/theme.js"></script>
    
  </body>
</html>