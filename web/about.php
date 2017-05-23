<?php
	$menu_main = 'about';
	$menu_sub = '';
	include_once('php-inc/header.php');
?>
  <section class="container2">

        <div class="content">
            <nav class="l">
                <ul>
                    <li class="firstNav"><a href="./index.php">Welcome</a></li>
                    <details>
                        <summary>Questions</summary>
                        <li class="secondeNav"><a href="./practice/topic1.php?name=1">XSS输出在HTML中</a></li>
                        <li class="secondeNav"><a href="./practice/topic2.php?name=2">XSS输出在HTML属性中</a></li>
                        <li class="secondeNav"><a href="./practice/topic3.php?xss=3">XSS输出在script标签中</a></li>
                        <li class="secondeNav"><a href="./practice/topic4.php?name=4">XSS输出在input value中</a></li>
                        <li class="secondeNav"><a href="./practice/topic5.php">XSS输出在textarea中</a></li>
                        <li class="secondeNav"><a href="./practice/topic6.php?name=6">XSS通过innerHTML输出</a></li>
                        <li class="secondeNav"><a href="./practice/topic7.php">XSS通过eval执行的情况</a></li>
                        <li class="secondeNav"><a href="./practice/16.2.default_menu_horizontal.swf?xml_path=custom_menu.xml">XSS Jplayer</a></li>
                        <li class="secondeNav"><a href="./practice/15.swfupload.swf?movieName=9">XSS Swfupload</a></li>
                    </details>
                    <li class="firstNav"><a href="./solutions/error_based.php">Solutions</a></li>
                    <li class="firstNav active"><a href="./about.php">About</a></li>
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
 <div class="row">
                  <div class="col-lg-12 main-chart">
                  	
                  	<div class="row ">
                  		<div class="col-md-12 col-sm-12 box0">
                  			<div class="box1">
                  				<h1 class="text-center">Two security</h1>
                  				<p class="box-welcome-text">Welcome to Two Security</p>
                  				</div>
                  		</div>
                  	</div>
                  	
                  	<div class="col-md-12 col-sm-12">
                  			<div class="mnc-center">
                  				<div class="display-data">
                  					<h1>Credits</h1>
                  					
                  					<p>Two security<br/>
                  						Website - <a href="http://twosecurity.xyz">http://twosecurity.xyz</a><br/>
                  					</p>
                  				</div>
                  			</div>
                  	</div>
                  
                  </div>

              </div>
            </div>
        </div>
    </section>


      
<?php
	include_once('php-inc/footer.php');
?>	  