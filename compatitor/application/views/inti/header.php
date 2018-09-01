<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traktor Nusantara</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-css-->
    <!-- <link href="<?php echo base_url(); ?>nivo/css/custom-theme.css" rel="stylesheet" /> -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <!-- <?=$header;?>
        <?=$body;?>
        <?=$footer;?> -->
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                            <li><a class="active" href="<?php echo site_url('web/log') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a> </li>
                    
              
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a href="<?php echo site_url('web') ?>" class="navbar-brand">
                    <img src="<?php echo base_url() ?>img/raknus.jpg" class="img-responsive" alt="Post">
                </a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li><a href="<?php echo site_url('web') ?>" title="">HOME</a></li>
                        <li><a href="<?php echo site_url('web/overview') ?>" title="">OVERVIEW</a></li>
                        <li><a href="<?php echo site_url('web/visi') ?>" title="">VISION & MISSION</a></li>
                        <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMPARE <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('Perbandingan/view_battery') ?>" title="">FORKLIFT BATTERY</a></li>
                                <li><a href="<?php echo site_url('Perbandingan/view_diesel') ?>" title="">FORKLIFT DIESEL</a></li>
                               
                            </ul>
                        </li>
                        
                        
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
                <!-- END MAIN NAVIGATION -->
                </div>
        </nav>        
    </header>
    <!-- Modal2 -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    
                                                                    <div class="signin-form profile">
                                                                    <h3 class="agileinfo_sign">Login</h3>   
                                                                            <div class="login-form">
                                                                                <form action="<?php echo base_url(). 'Login/masuk' ?>"  method="post" accept-charset="utf-8">
                                                                                    <input type="username" name="username" placeholder="username" id="username" required="">
                                                                                    <input type="password" name="password" placeholder="Password" id="password" required="">
                                                                                    <div class="tp">
                                                                                    <div class="modal-footer">
                                                                                        <input type="submit" value="Login"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    </body>
    
    </html>