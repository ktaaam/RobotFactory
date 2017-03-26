<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
 <!--sidebar start-->
 <aside>
 <div id="sidebar"  class="nav-collapse ">
       <!-- sidebar menu start-->
       <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
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
            <div class="row mtbox">
               <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  <div class="box1">
                     <h3>Total Amount Spent</h3>
                     <span class="li_banknote"></span>
                     <h3>$5000</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                 <div class="box1">
                     <h3>Total Parts Available </h3>
                   <span class="li_data"></span>
                     <h3>60 units</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                     <h3>Total Bots Assembled</h3>
                   <span class="li_truck"></span>
                     <h3>50 units</h3>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 box0">
                  <div class="box1">
                    <h3>Total Amount Earned</h3>
                     <span class="li_vallet"></span>
                     <h3>$5000</h3>
                  </div>
               </div>
           </div>
            <!-- /row mt -->	
           <div class="row mt">
              {robotParts}
               <div class="col-md-4 col-sm-4 mb">
                  <div class="white-panel pn">
                    <div class="white-header">
                        <h5>Total amount of Tops</h5>
                     </div>
                     <div class="row">
                       <div class="col-sm-6 col-xs-6 goleft">
                           <p><i class="fa fa-heart"></i>Total Tops: 20</p>
                        </div>
                       <div class="col-sm-6 col-xs-6"></div>
                     </div>
                   <div class="centered">
                        <img src="assets/images/parts/{imageSrc}" title="{who}" width="120">
                     </div>
                  </div>
               </div>
               {/robotParts}
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
                     <p><img src="assets/img/super.jpg" class="img-circle" width="80"></p>
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