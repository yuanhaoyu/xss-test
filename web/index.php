<?php
	$menu_main = 'welcome';
	$menu_sub = '';
	include_once('php-inc/header.php');
?>


      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
    <section class="container2">

        <div class="content">
            <nav class="l">
                <ul>
                    <li class="firstNav"><a href="../index.php">Welcome</a></li>
                    <details>
                        <summary>Questions</summary>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic1.php?name=1">XSS输出在HTML中</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic2.php?name=2">XSS输出在HTML属性中</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic3.php?xss=3">XSS输出在script标签中</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic4.php?name=4">XSS输出在input value中</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic5.php">XSS输出在textarea中</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic6.php?name=6">XSS通过innerHTML输出</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/topic7.php">XSS通过eval执行的情况</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/16.2.default_menu_horizontal.swf?xml_path=custom_menu.xml">XSS Jplayer</a></li>
                        <li class="secondeNav"><a href="http://xss.twosecurity.xyz/practice/15.swfupload.swf?movieName=9">XSS Swfupload</a></li>
                    </details>
                    <li class="firstNav"><a href="">Solutions</a></li>
                    <li class="firstNav"><a href="../about.php">About</a></li>
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
                <h1 class="text-left">Welcome To XSS Platform </h1>
                <h3 class="text-left">如何使用XSS练习</h3>
                <ul class="box-welcome-text">
                    <li>1. Question 包括了常见的几种类型的xss注入</li>
                    <li>2. Example 包括了常见的xss注入步骤</li>
                    <li>3. About 包括了站点基本信息</li>
                    <li>4. 本站由twosecurity强力驱动</li>
                </ul>
            </div>
        </div>
    </section>

      <!--main content end-->  
      
      
<?php
	include_once('php-inc/footer.php');
?>	  