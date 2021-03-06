<?php
$menu_main = 'error_based';
$menu_sub = 'first';
include_once('../php-inc/header.php');
?>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section class="container typo">
            <div class="content">
                <nav class="l">
                    <ul>
                        <li class="firstNav"><a href="../index.php">Index</a></li>
                        <details open>
                            <summary>Questions</summary>
                            <li class="secondeNav "><a href="./topic1.php?name=1">XSS输出在HTML中</a></li>
                            <li class="secondeNav "><a href="./topic2.php?name=2">XSS输出在HTML属性中</a></li>
                            <li class="secondeNav "><a href="./topic3.php?xss=3">XSS输出在script标签中</a></li>
                            <li class="secondeNav "><a href="./topic4.php?name=4">XSS输出在input value中</a></li>
                            <li class="secondeNav "><a href="./topic5.php">XSS输出在textarea中</a></li>
                            <li class="secondeNav active"><a href="./topic6.php?name=6">XSS通过innerHTML输出</a></li>
                            <li class="secondeNav"><a href="./topic7.php">XSS通过eval执行的情况</a></li>
                            <li class="secondeNav"><a href="./16.2.default_menu_horizontal.swf?xml_path=custom_menu.xml">XSS Jplayer</a></li>
                            <li class="secondeNav"><a href="./15.swfupload.swf?movieName=9">XSS Swfupload</a></li>
                        </details>
                        <li class="firstNav"><a href="../about.php">About</a></li>
                    </ul>
                </nav>
                <div class="line l"></div>
                <div class="box1 l">
                <div class="row">
                        <div class="col-lg-12 main-chart">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="mnc-center">
                                        <h1>XSS通过innerHTML输出的情况</h1>
                                        <h3>获取 text的值，并且输出在print内</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row mtbox">
                                <div class="col-md-12 col-sm-12">
                                    <div class="mnc-center">
                                        <div class="display-data">
                                            <?php
                                            error_reporting(0);
                                            $name = $_GET["name"];
                                            $name = preg_replace("/\"/","",$name)
                                            ?>
                                            <input id="text" type="text" value="<?php echo $name;?>" />
                                            <br><br>
                                            <div id="print"></div>
                                            
                                            <script type="text/javascript">
                                                var text = document.getElementById("text");
                                                var print = document.getElementById("print");
                                                print.innerHTML = text.value;
                                            </script>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div><!-- /col-lg-9 END SECTION MIDDLE -->

                    </div><!--/row -->
                    
                        </div>
                    </section>

<!--main content end-->

<?php
include_once('../php-inc/footer.php');
?>
