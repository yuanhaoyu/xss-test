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
    <style>
        html {
            height: 100%;
        }

        body {
            height: 100%;
        }

        .l {
            float: left;
        }

        .r {
            float: right;
        }

        .content {
            margin: 0 auto;
            padding: 100px;
            padding-left: 20px;
            padding-top: 50px;
            position: relative;
            top: 50px;
            width: 100%;
            background: white;
            min-height: 790px;
            border: 1px solid #ddd;
            border-width: 0 1px;
        }

        .box-welcome-text {
            text-align: left;
        }

        .text-left {
            text-align: left!important;
        }

        .box1 {
            border: 0;
        }

        .box1 h1 {
            margin-bottom: 20px;
            padding: 15px;
            padding-left: 0;
            border-bottom: 3px double #ddd;
        }

        .box1 h3 {
            margin-bottom: 35px;
        }

        .box1 ul li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .firstNav {
            margin-top: 7px;
            text-indent: 22px;
        }

        .secondeNav {
            margin-bottom: 5px;
            text-indent: 42px;
            font-size: 16px;
        }

        .s {
            margin-bottom: 5px;
        }

        i {
            position: relative;
            top: 14px;
            left: 10px;
            color: white;
        }

        nav {
            margin-right: 45px;
            padding-right: 58px;
            padding-left: 20px;
            font-size: 19px;
        }

        nav ul li {
            cursor: pointer;
        }

        @media screen and (min-width: 768px) {
            .container2 {
                width: 750px;
                margin: 0 auto;
            }
            .content {

                min-height: 620px;
            }
        }

        @media screen and (min-width: 992px) {
            .container2 {
                width: 970px;
                margin: 0 auto;
            }
        }

        @media screen and (min-width: 1200px) {
            .container2 {
                width: 880px;
                margin: 0 auto;
            }
            .content {

                min-height: 620px;
            }
        }

        @media screen and (min-width: 1366px) {
            .container2 {

                width: 940px;
                margin: 0 auto;
            }
            .content {

                min-height: 620px;
            }
        }

        @media screen and (min-width: 1440px) {
            .container2 {
                width: 1170px;
                margin: 0 auto;
            }
            .content {

                min-height: 620px;
            }
        }

        @media screen and (min-width: 1550px) {
            .container2 {
                width: 1640px;
                margin: 0 auto;
            }
            .content {

                min-height: 820px;
            }
        }

        summary {
            margin-top: 4px;
            color: #1abc9c;
            text-indent: 4px;
            cursor: pointer;
            outline: 0;
        }

        .line {
            width: 1px;
            height: 680px;
            background: #ddd;
            margin-right: 100px;
        }
    </style>
  </head>

  <body>
  	  <section id="container">
  	  	<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->

      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
 
      <!--sidebar end-->