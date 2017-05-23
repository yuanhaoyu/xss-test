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
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12 main-chart">

                <div class="row mtbox">
                    <div class="col-md-12 col-sm-12">
                        <div class="mnc-center">
                            <h1>XSS输出在textarea中的情况</h1>
                        </div>
                    </div>
                </div>

                <div class="row mtbox">
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

            </div><!-- /col-lg-9 END SECTION MIDDLE -->

        </div><!--/row -->
    </section>
</section>

<!--main content end-->

<?php
include_once('../php-inc/footer.php');
?>