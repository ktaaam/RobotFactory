<section id="main-content">
   <section class="wrapper">
       <div class="col-lg-9 main-chart">
           <div id="content">
               <h1>Console</h1>
               <div name="PCR_registration">
                   <h3>PCR Registration</h3>
                   <table>
                       <tr>
                           <td>Plant Name:</td>
                       </tr>
                       <tr>
                           <td><input type="texr" id="plant_name" required></td>
                       </tr>
                       <tr>
                           <td>Secret Token:</td>
                       </tr>
                       <tr>
                           <td><input type="texr" id="secret_token" required></td>
                       </tr>
                       <tr>
                           <td><button id="btn_register">Register</button></td>
                       </tr>
                   </table>
               </div>
               <div>
                   <h3>DANGER ZONE</h3>
                   <button id="btn_reboot">Reboot</button>
               </div>
           </div>
           <script>
               var newURL = window.location.protocol + "//" + window.location.host;
               $('#btn_reboot').click(function(){
                   var msg = "WARNING: Rebooting the plant causes everything to be reset. "+
                           "Are you sure you want to do this?.";
                   if(confirm(msg)==true){
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url();?>' + 'Manage/Reboot',
                            success:function(data){
                                location.reload();
                                alert('Plant Reset');
                            }
                        }); 
                  }
               });
               var pName = $('#plant_name').val();
               var sToken = $('#secret_token').val();
               $('#btn_register').click(function(){
                 if(pName != null && pName != "" && sToken != null && sToken != ""){
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url();?>' + 'Manage/Register',
                        dataType: 'JSON',
                        data:{pName:pName, sToken:sToken},
                        success:function(response){
                            if(reponse.toLowerCase()=='ok'){
                                alert('Plant Registerd');
                                location.reload();
                            }
                            else{
                                alert('Invalid factory name or token given');
                                location.reload();
                            }
                        }
                    }); 
                 } 
               });
               
           </script>
           <!--end content-->
       </div>
   </section>
</section>

