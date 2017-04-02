 <?php
 if (!defined('APPPATH'))
     exit('No direct script access allowed');
 /**
  * view/template.php
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
         <title>{title}</title>
         <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
         <!-- <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/> -->
   
   
   <!-- HOME PAGE -->


   <!--external css-->
   <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="/assets/css/zabuto_calendar.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/js/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css"/>    
   
   <!-- Custom styles for this template -->
   <link href="assets/css/style2.css" rel="stylesheet"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet"/>

   <script src="assets/js/chart-master/Chart.js"></script>
   
   <!-- js placed at the end of the document so the pages load faster -->
   <script src="/assets/js/jquery.js"></script>
   <script src="/assets/js/jquery-1.8.3.min.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
   <script src="/assets/js/jquery.scrollTo.min.js"></script>
   <script src="/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="/assets/js/jquery.sparkline.js"></script>


   <!--common script for all pages-->
   <script src="/assets/js/common-scripts.js"></script>
   
   <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
   <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

   <!--script for this page-->
   <script src="/assets/js/sparkline-chart.js"></script>    
   <script src="/assets/js/zabuto_calendar.js"></script> 
   
   <script type="text/javascript">
     $(document).ready(function () {
     var unique_id = $.gritter.add({
       // (string | mandatory) the heading of the notification
       
       // (string | mandatory) the text inside the notification
       text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
       // (string | optional) the image to display on the left
       image: 'assets/img/ui-sam.jpg',
       // (bool | optional) if you want it to fade out on its own or just sit there
       sticky: true,
       // (int | optional) the time you want it to be alive for before fading out
       time: '',
       // (string | optional) the class name you want to apply to that specific message
       class_name: 'my-sticky-class'
     });

     return false;
     });
   </script>
   
   <script type="application/javascript">
     $(document).ready(function () {
       $("#date-popover").popover({html: true, trigger: "manual"});
       $("#date-popover").hide();
       $("#date-popover").click(function (e) {
         $(this).hide();
       });
     
       $("#my-calendar").zabuto_calendar({
         action: function () {
           return myDateFunction(this.id, false);
         },
         action_nav: function () {
           return myNavFunction(this.id);
         },
         ajax: {
           url: "show_data.php?action=1",
           modal: true
         },
         legend: [
           {type: "text", label: "Special event", badge: "00"},
           {type: "block", label: "Regular event", }
         ]
       });
     });
     
    
     function myNavFunction(id) {
       $("#date-popover").hide();
       var nav = $("#" + id).data("navigation");
       var to = $("#" + id).data("to");
       console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
     }
   </script>
   
   <!-- HOME PAGE CSS JAVASCRIPT -->
     </head>
     <body>
         <div class="container">
             <div class="navbar">
                 <div class="navbar-inner">
                     <a class="brand" href="/"><img src="/assets/images/logo.png"/></a>
                     {menubar} 
                  </div>
             </div>           
             <div id="content">
            <h1>{title}</h1>
              

             </div>
              {content}
             <div id="footer" class="span12">
                 Copyright &copy; 2017
             </div>
         </div>
         
         <script src="/assets/js/jquery-1.11.1.min.js"></script>
         <script src="/assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="/assets/css/lightbox.css" />

         
     </body>
 </html>
