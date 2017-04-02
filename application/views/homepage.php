<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
 <!--sidebar start-->
 <aside>
 <div id="sidebar"  class="nav-collapse ">
       <!-- sidebar menu start-->
       <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
          <h5 class="centered">Dankpapaya</h5>
          <li class="mt">
             <a class="active" href="">
             <i class="fa fa-dashboard"></i>
             <span>Dashboard</span>
             </a>
          </li>
       </ul>
       <!-- sidebar menu end-->
   </div>
</aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
   MAIN CONTENT
   *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
      <div class="row">
         <div class="col-lg-9 main-chart">
            <!-- SUMMARY SECTION -->
            <div class="row mtbox">
               <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  <div class="box1">
                     {robotParts}
                     <h3>Total Assembled Bots Sold </h3>
                     <span class="li_banknote"></span>
                     <h3>{totalBotsSold} units</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                     <h3>Total Bots Purchased </h3>
                     <span class="li_shop"></span>
                     <h3>{totalBotsBought} units</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                 <div class="box1">
                     <h3>Total Parts Available </h3>
                   <span class="li_data"></span>
                     <h3>{totalPartsCounter} units</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                     <h3>Total Bots Assembled</h3>
                   <span class="li_truck"></span>
                     <h3>{totalRobotsAssem} units</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                    <h3>Total Balance Amount</h3>
                     <span class="li_vallet"></span>
                     <h3>${balance}</h3>
                  </div>
               </div>
           </div>
          <!-- SUMMARY SECTION HAS ENDED -->

            <!-- COUNTED PARTS SECTION-->
            <!-- /row mt -->	
           <div class="row mt">
               <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                        <h5>Total amount of Tops</h5>
                     </div>
                     <div class="row">
                       <div class="col-sm-6 col-xs-6 goleft">
                           <p><i class="fa fa-heart"></i>Total Tops: {topPartsCounter}</p>
                        </div>
                       <div class="col-sm-6 col-xs-6"></div>
                     </div>
                   <div class="centered">
                        <img src="assets/images/parts/{topImageSrc}" title="" width="120">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                        <h5>Total Amount of Torse</h5>
                     </div>
                     <div class="row">
                       <div class="col-sm-6 col-xs-6 goleft">
                           <p><i class="fa fa-heart"></i>Total Torso: {torsoPartsCounter}</p>
                        </div>
                       <div class="col-sm-6 col-xs-6"></div>
                     </div>
                   <div class="centered">
                        <img src="assets/images/parts/{torsoImageSrc}" title="" width="120">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                        <h5>Total Amout of Bottom</h5>
                     </div>
                     <div class="row">
                       <div class="col-sm-6 col-xs-6 goleft">
                           <p><i class="fa fa-heart"></i>Total Bottom: {bottomPartsCounter}</p>
                        </div>
                       <div class="col-sm-6 col-xs-6"></div>
                     </div>
                   <div class="centered">
                        <img src="assets/images/parts/{bottomImageSrc}" title="bottom" width="120">
                     </div>
                  </div>
               </div>
               {/robotParts}
               <!-- COUNTED PARTS SECTION HAD ENDED -->

               <!-- RECENTLY BUILT ROBOT SECTION -->
               {recentRobots}
               <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                        <h5>Recently Built Robots</h5>
                     </div>
                     <div class="row">
                       <div class="col-sm-6 col-xs-6 goleft">
                           <p>Robot ID: {recentRobotId}</p>
                        </div>
                       <div class="col-sm-6 col-xs-6"></div>
                     </div>
                   <div class="centered">
                        <img src="assets/images/parts/{recentTop}.jpeg" title="top" width="120">
                     </div>
                   <div class="centered">
                        <img src="assets/images/parts/{recentTorso}.jpeg" title="torso" width="120">
                  </div>
                  <div class="centered">
                        <img src="assets/images/parts/{recentBottom}.jpeg" title="bottom" width="120">
                  </div>
                  </div>
               </div>
               {/recentRobots}
               <!-- RECENTLY BUILT ROBOT SECTION HAS ENDED -->
               <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                 <!-- WHITE PANEL - TOP USER -->
                  <div class="white-panel pn">
                     <div class="white-header">
                        <h5>Developer</h5>
                     </div>
                     <p><img src="assets/img/bat.jpg" class="img-circle" width="80"></p>
                     <p><b>Kevin Tam</b></p>
                    <div class="col-md-6">
                       <p class="small mt">MEMBER SINCE</p>
                       <p>2017</p>
                     </div>
                  </div>
              </div>
              <!-- /col-md-4 -->
               <div class="col-md-4 mb">
                  <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                     <div class="white-header">
                        <h5>Developer</h5>
                     </div>
                     <p><img src="assets/img/wonder.jpg" class="img-circle" width="80"></p>
                     <p><b>Alex Bai</b></p>
                    <div class="col-md-6">
                        <p class="small mt">MEMBER SINCE</p>
                        <p>2017</p>
                     </div>
                  </div>
               </div>
               <!-- /col-md-4 -->
               <div class="col-md-4 mb">
                  <!-- WHITE PANEL - TOP USER -->
                  <div class="white-panel pn">
                     <div class="white-header">
                        <h5>Developer</h5>
                     </div>
                     <p><img src="assets/img/flash.jpeg" class="img-circle" width="80"></p>
                     <p><b>Jimmy Wang</b></p>
                    <div class="col-md-6">
                       <p class="small mt">MEMBER SINCE</p>
                        <p>2017</p>
                    </div>
                 </div>
               </div>
               <!-- /col-md-4 -->
               <div class="col-md-4 mb">
                 <!-- WHITE PANEL - TOP USER -->
                 <div class="white-panel pn">
                     <div class="white-header">
                        <h5>Developer</h5>
                    </div>
                     <p><img src="assets/img/green.jpg" class="img-circle" width="80"></p>
                     <p><b>Dallas Tang</b></p>
                     <div class="col-md-6">
                        <p class="small mt">MEMBER SINCE</p>
                        <p>2017</p>
                     </div>
                 </div>
               </div>
               <!-- /col-md-4 -->
            </div>
             <!-- /row -->
          </div>
       </div>
    </section>
 </section>
 <!--main content end--> 