<?php
/*
 * 反射型xss
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

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div class="col-md-12 col-sm-12">
                            <div class="mnc-center">
                                <h1>XSS输出在HTML中的情况</h1>
                                <h2>(构造参数)</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mtbox">
                        <div class="col-md-12 col-sm-12">
                            <div class="mnc-center">
                                <div class="display-data">
                                    <h2 align="center">
                                        您的用户名是：
                                    </h2>
                                    <?php
                                        if (array_key_exists("name", $_GET) && $_GET['name'] != NULL) {
                                            echo $_GET['name'];
                                        }
                                ?>
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
