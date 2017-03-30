<section id="main-content">
    <section class="wrapper">
        <div class="col-lg-9 main-chart">
            <div id="content">
                <h1>Console</h1>
                <div name="sell_parts">
                    
                </div>
                
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
            $(document).ready(function(){
                var newURL = window.location.protocol + "//" + window.location.host;
                $('#btn_reboot').click(function(){
                var msg = "WARNING: Rebooting the plant causes everything to be reset. " +
                        "Are you sure you want to do this?.";
                    if (confirm(msg) == true){
                        $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url(); ?>' + 'Manage/Reboot',
                                dataType: 'JSON',
                                success:function(response){
                                    alert(response);
                                    if(response.toLowerCase() == 'ok'){
                                        alert('Plant Reset' + response);
                                    }
                                    location.reload();
                                },
                                error:function(msg){
                                    alert('ERROR: Could not reboot the plant' + msg);
                                    location.reload();
                                }
                        });
                    }
                });
                
                
                $('#btn_register').click(function(){
                    var pName = $('#plant_name').val();
                    var sToken = $('#secret_token').val();
                    if (pName != null && pName != "" && sToken != null && sToken != ""){
                        $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url(); ?>' + 'Manage/Register',
                                dataType: 'JSON',
                                data:{pName: pName, sToken: sToken},
                                success:function(response){
                                    alert(response);
                                    if (reponse.toLowerCase() == 'ok'){
                                        alert('Plant Registerd ' + response);
                                    }
                                    else{
                                        alert('Invalid factory name or token given' + response);
                                    }
                                    location.reload();
                                },
                                error:function(msg){
                                    alert('Invalid factory name or token given' + msg);
                                    location.reload();
                                }
                        });
                    }
                });
            });

            </script>
            <!--end content-->
        </div>
    </section>
</section>

