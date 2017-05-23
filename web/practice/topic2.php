<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/*
 * 存储型xss
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
                            <h1>XSS输出在HTML属性中的情况</h1>
                            <h2>(当用户点击文本框时触发)</h2>
                            <br />
                            <?php
                            if (isset($_GET['name'])) {
                                $name = $_GET["name"];
                            }
                            ?>
                            <h3>您的姓名：<input type="text" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];}?>"></h3>
                        </div>
                    </div>
                </div>

                <div class="row mtbox">
                    <div class="col-md-12 col-sm-12">
                        <div class="mnc-center">
                            <div class="display-data">

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
</body>>
</html>