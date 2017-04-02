 <section id="main-content">
   <section class="wrapper">
      <div class="col-lg-9 main-chart">      
        <h2>Parts</h2>    
<<<<<<< HEAD
        <button>Build More Parts</button>  
        <button>Buy Parts</button>
        <table class="table table-striped">
		  <tr>
		  	{partsTable}
		    <td>
		    	<a href = "Parts/Details/{partsId}">
		    		<img class="img-thumbnail" src= "assets/images/parts/{partPic}">
		    	</a>
		    </td>
		    {/partsTable}
		  </tr>
		  <tr>
			{partsTable}
		  	<td>Robot Model: {partModel}</td> 
		  	{/partsTable}
		  </tr>
		  <tr>
		  	{partsTable}
		  	<td>Robot Part: {partCode}</td>
		  	{/partsTable}
		  </tr>
		</table>
      </div>
   </section>
</section>