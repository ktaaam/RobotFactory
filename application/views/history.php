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
                  <th>Time</th>
               </tr>
               {history}
               <tr>
                  <td>{transID}</td>
                  <td>{purchaseType}</td>
                  <td>{robotID}</td>
                  <td>{partsID}</td>
                  <td>{shipmentID}</td>
                  <td>{date}</td>
                  <td>{time}</td>
               </tr>
               {/history}		
            </table>
         </div>
      </div>
   </section>
</section>