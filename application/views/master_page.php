<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Portal</title>
        <link href="<?php echo base_url() ?>asset/front_end/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/front_end/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Kanit|PT+Sans+Narrow|Share+Tech" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
          <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
       
          <script src="<?php echo base_url() ?>asset/front_end/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url() ?>asset/front_end/js/bootstrap.min.js"></script>

    </head>
    <body>

        <section id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header clearfix">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span></button>
                        <div class="brand_1 clearfix"><a class="navbar-brand" href="index.html"><i>News <p style="color:darkmagenta">Portal</p></i></a></div>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li><b><a  style="color:black;" class=""  href="index.html"><i class="fas fa-home"></i>Home</a></b></li>
                                <li><a class=""  style="color:yellow;" href="regions.html">Bangladesh</a></li>
                                <li><a class=""  style="color:blueviolet;" href="regions.html">International</a></li>
                                <li><a class=""  style="color:violet;" href="politics.html">Sport</a></li>
                               
                                <li><a class=""  style="color:black;"  href="pages.html">Economy</a></li>
                               
                               
                                <li><a  class=""  style="color:hotpink;" href="contact.html">Science & tec.</a></li>
                                <li class="dropdown dropdown-large">
                                    <a href="#"  style="color:brown;" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>

                                    <ul class="dropdown-menu dropdown-menu-large row">
                                        <li class="col-sm-3">
                                            <a class="space_none" href="#"><img src="<?php echo base_url() ?>asset/front_end/img/122.jpg" width="100%"></a>
                                            <a class="space_none" href="#"><img src="<?php echo base_url() ?>asset/front_end/img/123.jpg" width="100%"></a>					</li>
                                        <li class="col-sm-3">
                                            <a class="space_none" href="#"><img src="<?php echo base_url() ?>asset/front_end/img/124.jpg" width="100%"></a>
                                            <a class="space_none" href="#"><img src="<?php echo base_url() ?>asset/front_end/img/125.jpg" width="100%"></a>					</li>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Input groups</li>
                                                <li><a href="#">Basic example</a></li>
                                                <li><a href="#">Sizing</a></li>
                                                <li><a href="#">Checkboxes and radio addons</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Navs</li>
                                                <li><a href="#">Tabs</a></li>
                                                <li><a href="#">Pills</a></li>
                                                <li><a href="#">Justified</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header">Navbar</li>
                                                <li><a href="#">Default navbar</a></li>
                                                <li><a href="#">Buttons</a></li>
                                                <li><a href="#">Text</a></li>
                                                <li><a href="#">Non-nav links</a></li>
                                                <li><a href="#">Component alignment</a></li>
                                                <li><a href="#">Fixed to top</a></li>
                                                <li><a href="#">Fixed to bottom</a></li>
                                                <li><a href="#">Static top</a></li>
                                                <li><a href="#">Inverted navbar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                               
                                <li><input class="form-control"  placeholder="Search"type="text"></li>

                            </ul>
                        </div>
                    </div>
                </div>
          
            </nav>
            
        </section>
    
    
        
       
        <section id="stories">
            
            
            
            <div class="container">
                <div class="row">
                    <ul class="breadcrumb">
                           <li>
                         <i class="fas fa-home"></i>
                            <a href="">Home</a> 
                            
                        </li>
                    <li>
                         
                            <a href="#">Bangladesh</a></li>
 
                    </ul>
                    <div class="col-sm-3">
                        
                        <div class="stories_1">
                            <h5>Trending News</h5>
                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/1.jpg" width="100%"></a>
                            <ul>
                                <li class="border_bottom_1 bold_1"><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li class="border_bottom_1"><a href="#">Consectetur adipiscing elit integer nec</a></li>
                                <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam.</a></li>
                                <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh  imperdiet.</a></li>
                                <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris.</a></li>
                                <li class="border_bottom_1"><a href="#"> Fusce nec tellus sed augue semper porta.</a></li>
                                <li class="border_bottom_1"><a href="#">Vestibulum lacinia arcu eget nulla</a></li>
                                <li class="border_bottom_1"><a href="#">Class aptent taciti sociosqu ad litora </a></li>
                                <li><a href="#">Class aptent taciti sociosqu ad litora </a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="stories_2">
                            <h1 class="text-center"><a href="#">Curabitursodales</a></h1>
                            <div class="story_image">
                                <div><a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/2.jpg" width="100%"></a></div>
                                <div class="story_heading"><h5>LATEST STORIES</h5></div>
                            </div>
                            <div class="stories_3">
                                <a class="a_1" href="#"> Curabitursodales ligula in libero. Sed dignissim lacinia nunc.</a>
                                <p><a href="#"><span>Inceptos:</span> Sed dignissim lacinia </a>
                                    <a href="#"><span>Take a Look:</span> 5 Month to go </a>
                                    <a href="#"><span>Target:</span> We finished</a>
                                    <a class="border_none_1" href="#">'Thank you' Text</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="buzz">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="stories_1">
                            <h5>Story and Area</h5>
                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/3.jpg" width="100%"></a>
                            <ul>
                                <li class="border_bottom_1"><a href="#">Curabitursodales ligula in libero</a></li>
                                <li class="border_bottom_1"><a href="#">Class aptent taciti sociosqu ad litora</a></li>
                                <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta.</a></li>
                                <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh imperdiet.</a></li>
                                <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris.</a></li>
                                <li class="border_bottom_1"><a href="#">Consectetur adipiscing elit integer nec</a></li>
                                <li class="border_bottom_1"><a href="#">Tellus sed augue semper porta  massa.</a></li>
                                <li class="border_bottom_1"><a href="#">Vestibulum lacinia arcu eget nulla</a></li>
                                <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh imperdiet.</a></li>
                                <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris.</a></li>
                                <li><a href="#">Curabitursodales ligula in libero</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="stories_1 feature_1">
                            <h5>Popular</h5>
                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/4.jpg" width="100%"></a>
                            <div class="buzz_1">
                                <a href="#">Duis sagittis ipsum. Praesent mauris</a>
                            </div>
                        </div>
                        <div class="col-sm-12 buzz_main">
                            <div class="col-sm-5 buzz_inner">
                                <div class="buzz_2">
                                    <img src="<?php echo base_url() ?>asset/front_end/img/5.jpg" width="100%">
                                </div>
                            </div>
                            <div class="col-sm-7 buzz_inner_1">
                                <a href="#">Quis sem at nibh elementum imperdiet</a>
                                <p class="para_next">  Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 buzz_main">
                            <div class="col-sm-5 buzz_inner">
                                <div class="buzz_2">
                                    <img src="<?php echo base_url() ?>asset/front_end/img/6.jpg" width="100%">
                                </div>
                            </div>
                            <div class="col-sm-7 buzz_inner_1 border_top_1">
                                <a href="#">Quis sem at nibh elementum imperdiet</a>
                                <p class="para_next">  Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="buzz_3">
                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/7.jpg" width="100%" height="250px"></a>
                            <h5>Most Famous</h5>
                            <div class="col-sm-12 buzz_3_main">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/8.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_2">
                                        <a href="#">The world which can't  be defeated</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/9.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <p><a href="#">Trending Context</a></p>
                                        <a href="#">The world is in your own hand</a>
                                        <p><a href="#">Which belongs to you</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/10.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_2">
                                        <a href="#">The world which can't be defeated</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/11.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <p><a href="#">Trending Context</a></p>
                                        <a href="#">The world is in your own hand</a>
                                        <p><a href="#">Which belongs to you</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="stories_1">
                            <h5>Take a deep action</h5>
                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/12.jpg" width="100%"></a>
                            <ul>
                                <li class=" bold_1"><a href="#">Which is universily correct and appealing</a></li>
                            </ul>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/13.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/14.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Latest  items of this year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/15.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Is this thing is worthy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/16.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Sed cursus ante dapibus diam. Sed nisi.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="stories_1 feature_1">

                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/17.jpg" width="100%" height="200px"></a>
                            <div class="buzz_1">
                                <a href="#">Nulla quis sem at nibh elementum imperdiet duis sagittis ipsum</a>
                            </div>
                        </div>
                        <div class="col-sm-12 buzz_3_main border_top_1">
                            <div class="col-sm-4">
                                <div class="spot_1">
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/18.jpg" width="100%"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="spot_3">
                                    <a href="#">Trending context the world is in your own hand</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 buzz_3_main border_top_1">
                            <div class="col-sm-4">
                                <div class="spot_1">
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/19.jpg" width="100%"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="spot_3">
                                    <a href="#">Trending context the world is in your own hand</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 buzz_3_main border_top_1">
                            <div class="col-sm-4">
                                <div class="spot_1">
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/20.jpg" width="100%"></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="spot_3">
                                    <a href="#">Trending context the world is in your own hand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="stories_1">
                            <h5>Comments</h5>
                            <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/21.jpg" width="100%"></a>
                            <ul>
                                <li class=" bold_1"><a href="#">Elementum quis  sagittis ipsum nulla quis sem at nibh </a></li>
                            </ul>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/22.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Lorem ipsum  consectetur adipiscing elit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/23.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Elementum quis sagittis ipsum nulla quis sem.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/24.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Which is universily correct and appealing honest</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 buzz_3_main border_top_1">
                                <div class="col-sm-4">
                                    <div class="spot_1">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/25.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="spot_3">
                                        <a href="#">Which is universily correct and appealing honest</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="features_1">
                            <h2>Featuring Prasent</h2>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="features_2">
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Game</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/26.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Consectetur adipiscing elit. Integer nec odio.</a></li>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam. </a></li>
                                        <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris sagittis </a></li>
                                        <li class="border_bottom_1"><a href="#">Trending context the world is in your own hand</a></li>
                                        <li><a href="#">Elementum quis sagittis ipsum nulla quis sem. </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Journey</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/27.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Consectetur adipiscing elit. Integer nec odio.</a></li>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam. </a></li>
                                        <li class="border_bottom_1"><a href="#">Trending context the world is in your own hand</a></li>
                                        <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris sagittis</a></li>
                                        <li><a href="#">Elementum quis sagittis ipsum nulla quis sem.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="stories_1">
                                    <a href="#"><img  class="thumb_1" src="<?php echo base_url() ?>asset/front_end/img/28.jpg" width="100%" height="250px"></a>
                                    <h5>Related World Content</h5>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Elementum quis sagittis ipsum nulla.<span>WORLD Current System</span></a></li>
                                        <li class="border_bottom_1"><a href="#">Elementum quis sagittis ipsum nulla.<span> WORLD Current System</span> </a></li>
                                        <li><a href="#">Elementum quis sagittis ipsum nulla. <span>WORLD Current System</span> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="fetur_1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="features_2">
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Fashion</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/29.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Nulla quis sem at nibh elementum imperdiet.</a></li>
                                        <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta. </a></li>
                                        <li class="border_bottom_1"><a href="#">Trending context the world is in your own hand </a></li>
                                        <li class="border_bottom_1"><a href="#">Elementum quis sagittis ipsum nulla quis sem.</a></li>
                                        <li><a href="#">Vestibulum lacinia arcu eget nulla</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>WORLD Currency</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/30.png" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Nulla quis sem at nibh elementum imperdiet.</a></li>
                                        <li class="border_bottom_1"><a href="#">Vestibulum lacinia arcu eget nulla</a></li>
                                        <li class="border_bottom_1"><a href="#">Elementum quis sagittis ipsum nulla quis sem. </a></li>
                                        <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta. </a></li>
                                        <li><a href="#">Trending context the world is in your own hand </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Trending Project</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/31.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Nulla quis sem at nibh elementum imperdiet.</a></li>
                                        <li class="border_bottom_1"><a href="#">Elementum quis sagittis ipsum nulla quis sem. </a></li>
                                        <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta.</a></li>
                                        <li class="border_bottom_1"><a href="#">Trending context the world is in your own hand </a></li>
                                        <li class="border_bottom_1"><a href="#">Vestibulum lacinia arcu eget nulla </a></li>
                                        <li><a href="#">Class aptent taciti sociosqu ad litora </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="preview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="features_1">
                            <h2>Preview</h2>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="preview_1">
                            <a href="#"><h4>Important videos</h4></a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/32.jpg" width="100%"></a>
                                <p><a href="#">Duis sagittis ipsum. Praesent mauris</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/33.jpg" width="100%"></a>
                                <p><a href="#">Duis sagittis ipsum. Praesent mauris</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/34.jpg" width="100%"></a>
                                <p><a href="#">Duis sagittis ipsum. Praesent mauris</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/35.jpg" width="100%"></a>
                                <p><a href="#">Duis sagittis ipsum. Praesent mauris</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 preview_main">
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/36.jpg" width="100%"></a>
                                <p><a href="#">Fusce nec tellus sed augue semper porta.</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/37.jpg" width="100%"></a>
                                <p><a href="#">Fusce nec tellus sed augue semper porta.</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/38.png" width="100%"></a>
                                <p><a href="#">Fusce nec tellus sed augue semper porta.</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="preview_2">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/39.jpg" width="100%"></a>
                                <p><a href="#">Fusce nec tellus sed augue semper porta.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="trending">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="features_1">
                            <h2>Libero nec  libero  odio</h2>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-9">
                            <div class="col-sm-12 trend_1">
                                <div class="col-sm-4">
                                    <div class="preview_2">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/40.jpg" width="100%"></a>
                                        <p><a href="#">Consectetur adipiscing elit</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="preview_2">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/41.jpg" width="100%"></a>
                                        <p><a href="#">Integer nec Praesent libero.</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="preview_2">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/42.jpg" width="100%"></a>
                                        <p><a href="#">Sed cursus ante dapibus diam.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 trend">
                                <div class="col-sm-4">
                                    <div class="preview_2">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/43.jpg" width="100%"></a>
                                        <p><a href="#">Fusce nec tellus sed augue semper porta.</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="preview_2">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/44.jpg" width="100%"></a>
                                        <p><a href="#">Fusce nec tellus sed augue semper porta...</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="preview_2">
                                        <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/45.jpg" width="100%"></a>
                                        <p><a href="#">Fusce nec tellus sed augue semper porta.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="trending_1">
                                <img src="<?php echo base_url() ?>asset/front_end/img/46.jpg" width="100%" height="250px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="features_1">
                            <h2>Ante Dapibus cursus</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 count_1">
                        <div class="features_2">
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>WORLD Main Transport</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/47.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Libero / Dapibus a Nulla quis Transport?</a></li>
                                        <li class="border_bottom_1"><a href="#">Tellus sed augue semper porta massa. </a></li>
                                        <li><a href="#">Duis sagittis ipsum. Praesent mauris sagittis</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Currency Main World</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/48.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Libero / Dapibus a Nulla quis Transport?</a></li>
                                        <li class="border_bottom_1"><a href="#">Tellus sed augue semper porta massa. </a></li>
                                        <li><a href="#">Duis sagittis ipsum. Praesent mauris sagittis </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>National Currency Product</h5></a>
                                    <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/49.jpg" width="100%"></a>
                                    <ul>
                                        <li class="border_bottom_1 bold_1"><a href="#">Libero / Dapibus a Nulla quis Transport?</a></li>
                                        <li class="border_bottom_1"><a href="#">Tellus sed augue semper porta massa. </a></li>
                                        <li><a href="#">Duis sagittis ipsum. Praesent mauris sagittis</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 count_1">
                        <div class="features_2">
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Newly Offers!</h5></a>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam </a></li>
                                        <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh elementum imperdiet </a></li>
                                        <li><a href="#">Fusce nec tellus sed augue semper porta</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Currency In Overseas</h5></a>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta </a></li>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam </a></li>
                                        <li><a href="#">Nulla quis sem at nibh elementum imperdiet</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Progress Business World</h5></a>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam </a></li>
                                        <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh elementum imperdiet </a></li>
                                        <li><a href="#">Fusce nec tellus sed augue semper porta</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 count_1">
                        <div class="features_2">
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Fitness World</h5></a>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta </a></li>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam </a></li>
                                        <li><a href="#">Nulla quis sem at nibh elementum imperdiet</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>About Your State</h5></a>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam </a></li>
                                        <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh elementum imperdiet </a></li>
                                        <li><a href="#">Fusce nec tellus sed augue semper porta</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 f_1">
                                <div class="stories_1">
                                    <a  class="heading_tag" href="#"><h5>Your Computer World</h5></a>
                                    <ul>
                                        <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta </a></li>
                                        <li class="border_bottom_1"><a href="#">Sed cursus ante dapibus diam </a></li>
                                        <li><a href="#">Nulla quis sem at nibh elementum imperdiet</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="features_1">
                            <h2>In Same You Called It</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 count_2">
                        <div class="col-sm-7">
                            <div class="stories_1 feature_1">
                                <a href="#"><img src="<?php echo base_url() ?>asset/front_end/img/50.jpg" width="100%" height="260px"></a>
                                <div class="buzz_1">
                                    <a href="#"> Mauris massa.Vestibulum lacinia arcu eget nulla.Class aptent taciti </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="stories_1">
                                <ul>
                                    <li class="border_bottom_1"><a href="#">Class aptent taciti sociosqu ad litora  </a></li>
                                    <li class="border_bottom_1"><a href="#">Curabitursodales ligula in libero</a></li>
                                    <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris sagittis</a></li>
                                    <li class="border_bottom_1"><a href="#">Vestibulum lacinia arcu eget nulla </a></li>
                                    <li class="border_bottom_1"><a href="#">Tellus sed augue semper porta massa.?</a></li>
                                    <li class="border_bottom_1"><a href="#">Consectetur adipiscing elit integer nec</a></li>
                                    <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris. </a></li>
                                    <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh imperdiet.</a></li>
                                    <li class="border_bottom_1"><a href="#">'Fusce nec tellus sed augue semper porta.?'</a></li>
                                    <li class="border_bottom_1"><a href="#">Class aptent taciti sociosqu ad litora</a></li>
                                    <li class="border_none_1"><a href="#">Curabitursodales ligula in libero </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-8">
                            <div class="footer_1">
                                <a href="#"> America, South Zone</a>
                                <a href="#"><i class="fa fa-cloud"></i></a>
                                <a href="#">9°</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 count_3">
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">States</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                    <li><a href="#">East</a></li>
                                    <li><a href="#">West</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#"> Politic World</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                    <li><a href="#">East</a></li>
                                    <li><a href="#">West</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Pricing</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Games</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                    <li><a href="#">East</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Article</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Integer</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                    <li><a href="#">East</a></li>
                                    <li><a href="#">West</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Journey</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                    <li><a href="#">East</a></li>
                                    <li><a href="#">West</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Fashion</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                    <li><a href="#">East</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Trending</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Player</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                    <li><a href="#">South</a></li>
                                    <li><a href="#">North</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer_2">
                                <ul>
                                    <li class="bold_2"><a href="#">Extra...</a></li>
                                    <li><a href="#">Paris</a></li>
                                    <li><a href="#">America</a></li>
                                    <li><a href="#">Pakistan</a></li>
                                    <li><a href="#">Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 count_5">
                        <div class="footer_3">
                            <span><a href="#">WORLD</a></span>
                            <a href="#">Latest Launching +</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="footer_4 text-right">
                            <p>© 2013 Your Website Name. All Rights Reserved | Design by <a href="http://www.templateonweb.com">TemplateOnWeb</a></p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="footer_4 text-right">
                            <p>WORLD Integer nec odio.</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="footer_5 text-right">
                            <a href="#">Terms and Condition</a>
                            <a href="#">Privacy</a>
                            <a href="#">Choices</a>
                            <a href="#">Advertising</a>
                            <a href="#">Newsletters</a>
                            <a href="#">About us</a>
                            <a href="#">Our Work</a>
                            <a href="#">For Help</a>
                            <a href="#">Scripts</a>
                            <a href="#">License </a>
                            <a class="border_none_1" href="#">WORLD source</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>

</html>
