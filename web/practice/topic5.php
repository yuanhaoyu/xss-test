<?php
/**
 * Created by PhpStorm.
 * User: whois
 * Date: 2017/3/13
 * Time: 13:00
 * 过滤and,or,注释符，保留'/*'符号
 */
$menu_main = 'error_based';
$menu_sub = 'first';
include_once('../php-inc/header.php');
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
                    <details open>
                        <summary>Questions</summary>
                        <li class="secondeNav"><a href="./topic1.php?name=1">XSS输出在HTML中</a></li>
                        <li class="secondeNav"><a href="./topic2.php?name=2">XSS输出在HTML属性中</a></li>
                        <li class="secondeNav"><a href="./topic3.php?xss=3">XSS输出在script标签中</a></li>
                        <li class="secondeNav"><a href="./topic4.php?name=4">XSS输出在input value中</a></li>
                        <li class="secondeNav active"><a href="./topic5.php">XSS输出在textarea中</a></li>
                        <li class="secondeNav"><a href="./topic6.php?name=6">XSS通过innerHTML输出</a></li>
                        <li class="secondeNav"><a href="./topic7.php">XSS通过eval执行的情况</a></li>
                        <li class="secondeNav"><a href="./16.2.default_menu_horizontal.swf?xml_path=custom_menu.xml">XSS Jplayer</a></li>
                        <li class="secondeNav"><a href="./15.swfupload.swf?movieName=9">XSS Swfupload</a></li>
                    </details>
                    <li class="firstNav"><a href="../solutions/error_based.php">Solutions</a></li>
                    <li class="firstNav"><a href="../about.php">About</a></li>
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l textarea_box">

                <div class="row">
                    <div class="col-lg-12 main-chart">

                        <div class="row ">
                            <div class="col-md-12 col-sm-12">
                                <div class="mnc-center">
                                    <h1>XSS输出在textarea中的情况</h1>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-12 col-sm-12">
                                <div class="mnc-center">
                                    <div class="display-data">
                                        <?php
                                include("../sql-connections/sql-connect.php");
                                ?>
                                            <form name="form1" method="post" action="">
                                                <h1 align="center">
                                                    留言板：
                                                </h1>
                                                <textarea name="messageBox" rows="5" cols="100" placeholder="请输入您的内容"></textarea>
                                                <br />
                                                <input type="submit" name="submit" value="提交" />
                                                <input type="reset" name="reset" value="重置" />
                                            </form>
                                            <h2 align="center">
                                                最近的10条留言为：
                                            </h2>
                                            <?php

                                $sql = "SELECT content FROM xss ORDER BY ID DESC LIMIT 0,10";
                                $result2 = mysqli_query($con, $sql) or die (mysqli_error($con));

                                foreach ($result2 as $key=>$value) {
                                    echo "<br>" . $value['content'];
                                }

                                ?>
                                                <?php
                                if(isset($_POST['submit']) && isset($_POST['messageBox'])) {
                                    $message = addslashes($_POST['messageBox']);
                                    $sql = "INSERT INTO xss(content) VALUES ('$message')";
                                    $result1 = mysqli_query($con, $sql) or die (mysqli_error($con));

                                    mysqli_close($con);
                                }
                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /col-lg-9 END SECTION MIDDLE -->

                </div>
                <!--/row -->

            </div>
    </section>


    <!--main content end-->

    <?php
include_once('../php-inc/footer.php');
?>