<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>SQL INJECTION PRACTICE</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" type="text/css" />
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	  <section id="container">
  	  	<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>XSS Injection Environment</b></a>
            <!--logo end-->            
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="../assets/img/logo.jpg" class="img-circle" width="60"></a></p>
              	  	
                  <li class="mt">
                      <a class="<?php echo ($menu_main == 'welcome')? "active" : ''; ?>" href="../index.php">
                          <i class="fa fa-thumbs-o-up"></i>
                          <span>Welcome</span>
                      </a>
                  </li>

                                    
                  <li class="sub-menu">
                  	  <a class="<?php echo ($menu_main == 'error_based')? "active" : ''; ?>" href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Questions</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic1.php?name=1">XSS输出在HTML中</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic2.php?name=2">XSS输出在HTML属性中</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic3.php?xss=3">XSS输出在script标签中</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic4.php?name=4">XSS输出在input value中</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic5.php">XSS输出在textarea中</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic6.php?name=6">XSS通过innerHTML输出</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/topic7.php">XSS通过eval执行的情况</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/16.2.default_menu_horizontal.swf?xml_path=custom_menu.xml">XSS Jplayer</a></li>
                          <li class="<?php echo ($menu_main == 'error_based' && $menu_sub == 'example1')? "active" : ''; ?>"><a  href="../practice/15.swfupload.swf?movieName=9">XSS Swfupload</a></li>
                      </ul>
                  </li>
                  
                   <li class="sub-menu">
                      <a class="<?php echo ($menu_main == 'solutions')? "active" : ''; ?>" href="javascript:;" >
                          <i class="fa fa-code"></i>
                          <span>Solutions</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($menu_main == 'solutions' && $menu_sub == 'error_based_solutions')? "active" : ''; ?>"><a  href="../solutions/error_based.php">Example</a></li>
                      </ul>
                  </li>
                  
                  <li>
                      <a class="<?php echo ($menu_main == 'about')? "active" : ''; ?>" href="../about.php">
                          <i class="fa fa-info-circle"></i>
                          <span>About</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->