<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Director</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css"><!-- theme styles -->

    <style>
    table {margin: 10px 0 10px 0;}
        table tr td {width: 250px; }

        .pull-right li {list-style: none;}

        .pagi_wrap a, .pagi_wrap strong{
          padding: 6px 12px;
          margin-left: -1px;
          line-height: 1.428571429;
          text-decoration: none;
          background-color: #ffffff;
          border: 1px solid #dddddd;
        }
        .pagi_wrap strong, .pagi_wrap a:hover{
          font-weight: normal;
          background-color: #CCCCFF;
        }

        .pagi_wrap{
          margin-bottom: 20px;

        }
    
    </style>   

  </head>
  
  <body role="document" class="page">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
        <div class="row"><!-- row -->
        
            <nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/logout">Sign Out!</a></li>
                </ul>
        
            </nav><!-- functional navig end -->
        
            <div class="col-lg-12">
        
                <div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="index.html" title="Home Page">
                            <img src="<?php echo base_url(); ?>img/site-logo.png" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            
                </div><!-- site logo end -->

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
                
                <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
                    
                    <div class="col-padded"><!-- inner custom column -->
                    
                        <div class="row gutter"><!-- row -->
                        
                            <div class="col-lg-12 col-md-12">
                    
                                <div class="pull-right back">
                                    <a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-large btn-info"><span class="glyphicon glyphicon-menu-left" aria-hidden=""></span> Back to Admin Home</a>
                                </div>
                                <h1 class="page-title">Welcome Admin, <?php echo $this->session->userdata('user_name'); ?></h1>
                                
                                <div class="news-body">
                                    <?php 
                                    
                                       
                                    
                                    foreach ($records->result() as $key): ?>
                                        

                                   
                                
                                    <table class="table">
                                    
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th></th>
                                        
                                        <tr>
                                            <td><?php echo $key->name; ?></td>
                                            <td><?php echo $key->designation; ?></td>
                                            <td><a href="<?php echo base_url(); ?>index.php/director/delete_director?id=<?php echo $key->id; ?>" class="btn btn-danger">Delete</a>

                                              </td>
                                        </tr>

                                        

                                    </table>

                                    <?php 
                                    
                                    endforeach; ?>


                                    
                                    
                                </div>
                            
                            </div>
                        
                        </div><!-- row end -->
                        <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="pagi_wrap">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                                
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                
            
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