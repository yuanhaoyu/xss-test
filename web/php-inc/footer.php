<!--footer start-->
      <!-- <footer class="site-footer">
          <div class="text-center">
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <!-- <script src="assets/js/jquery-1.8.3.min.js"></script> -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <?php 
    	if($menu_main == 'setup' && $menu_sub == 'createdb') {
    ?>
    <script type="text/javascript" charset="utf-8">
	    $(document).ready(function(){
	      $("#create-db").click(function(e){
	        e.preventDefault();
			$.ajax({type: "POST",
			        url: "../sql-connections/dbcreate.php",
			        success:function(result){
			        			$("div#sql-msg-section").css('visibility', 'visible');
			  					$("div#sql-msg").html(result);
			  		}
			});
	      });
	    });
    </script>
    <?php
    	}	 
    ?>
    
  </body>
</html>
