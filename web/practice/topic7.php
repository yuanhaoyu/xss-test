<?php
$menu_main = 'error_based';
$menu_sub = 'first';
include_once('../php-inc/header.php');
?>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content" xmlns="http://www.w3.org/1999/html">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12 main-chart">

                <div class="row mtbox">
                    <div class="col-md-12 col-sm-12">
                        <div class="mnc-center">
                            <h1>XSS通过eval执行的情况</h1>
                            <h2>location.hash.substr函数</h2>
                        </div>
                    </div>
                </div>

                <div class="row mtbox">
                    <div class="col-md-12 col-sm-12">
                        <div class="mnc-center">
                            <div class="display-data">
                                <script>

                                    eval(location.hash.substr(1));

                                </script>

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
