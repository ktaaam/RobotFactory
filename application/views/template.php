 <?php
 if (!defined('APPPATH'))
 	exit('No direct script access allowed');
 /**
  * views/template.php
  *
  * Pass in $pagetitle (which will in turn be passed along)
  * and $pagebody, the name of the content view.
  *
  * ------------------------------------------------------------------------
  */
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
     <head>
         <title>{pagetitle}</title>
         <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
         <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
		<link href="/assets/css/homepage/bootstrap.css" rel="stylesheet">

		<!--external css-->
		<link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="/assets/css/homepage/zabuto_calendar.css">
		<link rel="stylesheet" type="text/css" href="/assets/js/gritter/css/jquery.gritter.css" />
		<link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css">    
		
		<!-- Custom styles for this template -->
		<link href="/assets/css/homepage/style.css" rel="stylesheet">
		<link href="/assets/css/homepage/style-responsive.css" rel="stylesheet">

		<script src="/assets/js/chart-master/Chart.js"></script>
		
		    <!-- js placed at the end of the document so the pages load faster -->
		<script src="/assets/js/jquery.js"></script>
		<script src="/assets/js/jquery-1.8.3.min.js"></script>
		<!--<script src="/assets/js/bootstrap.min.js"></script>-->
		<script class="include" type="text/javascript" src="/assets/js/jquery.dcjqaccordion.2.7.js"></script>
		<script src="/assets/js/jquery.scrollTo.min.js"></script>
		<script src="/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
		<script src="/assets/js/jquery.sparkline.js"></script>


		<!--common script for all pages-->
		<script src="/assets/js/common-scripts.js"></script>
		
		<script type="text/javascript" src="/assets/js/gritter/js/jquery.gritter.js"></script>
		<script type="text/javascript" src="/assets/js/gritter-conf.js"></script>

		<!--script for this page-->
		<script src="/assets/js/sparkline-chart.js"></script>    
		<script src="/assets/js/zabuto_calendar.js"></script>	
		
		
     </head>
     <body>
	 
        <header class="header black-bg">		
            <!--logo start-->	
			{menubar}
            <!--logo end-->
        </header>
		
			{content}
		
	
		<!--footer start-->
		<footer class="site-footer">
			<div class="text-center">
				Copyright &copy; 2017
			</div>
		</footer>
		  <!--footer end-->

         <script src="/assets/js/jquery-1.11.1.min.js"></script>
         <script src="/assets/js/bootstrap.min.js"></script>
     </body>
 </html>