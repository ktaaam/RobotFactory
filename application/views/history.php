<section id="main-content">
   <section class="wrapper">
      <div class="col-lg-9 main-chart">
         <div class = "container-fluid">
            <table class="table" id="table_history">
               <tr>
                  <th>Transaction ID</th>
                  <th>Purchase Type</th>
                  <th>Robot ID</th>
                  <th>Parts ID</th>
                  <th>Shipment ID</th>
                  <th>Date</th>
					
               </tr>
               {history}
			  
               <tr>
				
                  <td>{transID}</td>
                  <td>{purchaseType}</td>
                  <td>{robotID}</td>
                  <td>{partsID}</td>
                  <td>{shipmentID}</td>
                  <td>{date}</td>
				
               </tr>
			   
               {/history}	
            </table>
			<input type="checkbox" name="dateSort" value="dateSort">Sort by date<br>
			<input type="checkbox" name="robotMSort" value="robotMSort">Sort by robot model<br>
         </div>
		 <?php echo $this->pagination->create_links(); ?>
      </div>
   </section>
</section>