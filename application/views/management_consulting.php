<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Consulting</title>
    
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

<body role="document" class="page">

    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->

        <div class="row"><!-- row -->

            <?php include 'include/top_right.php' ?>
            <div class="col-lg-12">

                <?php include 'include/logo.php' ?>

                <nav id="k-menu" class="k-main-navig"><!-- main navig -->

                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="news.html" title="Our School News">News</a>
                        </li>
                        <li>
                            <a href="events.html" title="Upcoming Events">Events</a>
                        </li>
                        <li>
                            <a href="courses.html" title="Available Courses">Courses</a>
                        </li>
                        <li>
                            <a href="#" class="Pages Collection" title="More Templates">Inner Pages</a>
                            <ul class="sub-menu">
                                <li><a href="news-single.html">News Single Page</a></li>
                                <li><a href="events-single.html">Events Single Page</a></li>
                                <li><a href="courses-single.html">Course Single Page</a></li>
                                <li><a href="gallery-single.html">Gallery Single Page</a></li>
                                <li><a href="news-stacked.html">News Stacked Page</a></li>
                                <li><a href="search-results.html">Search Results Page</a></li>
                                <li>
                                    <a href="#">Menu Test</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Second Level 01</a></li>
                                        <li>
                                            <a href="#">Second Level 02</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Third Level 01</a></li>
                                                <li><a href="#">Third Level 02</a></li>
                                                <li><a href="#">Third Level 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Second Level 03</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="current-menu-item">
                            <a href="about-us.html" title="How things work">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="full-width.html">Full Width Page</a></li>
                                <li><a href="sidebar-left.html">Sidebar on Left</a></li>
                                <li><a href="formatting.html">Formatting</a></li>
                                <li><a href="school-leadership.html">School Leadership</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html" title="School Contacts">Contact Us</a>
                        </li>
                    </ul>

                </nav><!-- main navig end -->

            </div>
            
        </div><!-- row end -->

    </div><!-- container + head wrapper end -->
    
    <div id="k-body"><!-- content wrapper -->

        <div class="container"><!-- container -->
            
            <div class="row no-gutter"><!-- row -->

                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

                    <div class="col-padded"><!-- inner custom column -->

                        <div class="row gutter"><!-- row -->

                            <div class="col-lg-12 col-md-12">


                            <h1 class="page-title">Management Consulting</h1>
                                
                                <div class="news-body">

                                    <p class="call-out">
                                        Our aim is to ensure your business achieves the potential it's capable of. We have the knowhow and experience to offer advice to help you run your business more effectively.
                                    </p>

                                    <p>
                                        We are practiced in acting as a sounding board for management, bringing to the relationship
                                        years of experience in business operation. We can identify key performance indicators in
                                        your business, which will assist you with growth. We are able to check your business is as
                                        competitive, focused, and profitable as it can be. We then offer flexible strategies, designed
                                        to address the issues affecting your business. Let us give your business a health check.
                                        Take the practical advice we can give to ensure the continual success of your venture.

                                    </p>
                                </div>

                            </div>

                        </div><!-- row end -->


                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
               <?php include 'include/side_bar.php' ?>

            </div><!-- row end -->

        </div><!-- container end -->

    </div><!-- content wrapper end -->
    
    <?php include 'include/footer.php';?>
    <?php include 'include/modal.php' ?>
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