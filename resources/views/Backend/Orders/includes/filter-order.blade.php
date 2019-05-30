<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white-background1">
		<i class="fa fa-filter" id="filtericonShowHide"></i>
		<div id="filterShowHide" class="col-lg-11 col-md-11 col-sm-11 col-xs-11 filterstyle" style="display: none;">
		<h4 class="modal-title content-title" style="padding: 15px 0;">
			Filters
		</h4>
		<span class="filterhidetext">
			No Filters applied
		</span>
		<p style="margin-top: 15px; display:none;">
			<span class="Stationaryfilter">
				Envelopes <i class="fa fa-times" aria-hidden="true"></i> 
			</span> 

			<span class="Stationaryfilter">
				In Printshop <i class="fa fa-times" aria-hidden="true"></i>
			</span>
			
			<span class="statusfilter">
				Completed <i class="fa fa-times" aria-hidden="true"></i>
			</span>
		</p>
	
	<form method="GET" action="route('orders.index')">
		<div class="row">
			<label class="col-sm-2 control-label">By Stationary</label>
			<div class="Stationary  col-sm-10">
       			<input type="checkbox" value="3" id="Envelopes" name="stationary[]"><label for="Envelopes"> Envelopes</label>
       			
       			<input type="checkbox" value="2" id="Letterheads" name="stationary[]">  <label for="Letterheads"> Letterheads</label>
       			
       			<input type="checkbox" value="1" id="Vistingcards" name="stationary[]">   <label for="Vistingcards">Visting cards</label>
       			
       			<input type="checkbox" value="4" id="Mugs" name="stationary[]">  <label for="Mugs"> Mugs</label>
   			</div>
   		</div>
   		<!-- <hr> -->

   		<!-- <div class="row">
   			<label class="col-sm-2 control-label">By Date</label>
   			<div class="datefrom col-sm-10">
   				<div class='col-sm-3'>
            		<div class='input-group date' id='datetimepicker1'>
                    	<input type='text' class="form-control" placeholder="Frome Date" />
                    	<span class="input-group-addon">
                    		<span class="glyphicon glyphicon-calendar"></span>
                    	</span>
            		</div>
				</div>
 			
     			<div class='col-sm-3'>
            		<div class='input-group date' id='datetimepicker2'>
                		<input type='text' class="form-control" placeholder="To Date" />
                		<span class="input-group-addon">
                			<span class="glyphicon glyphicon-calendar"></span>
                		</span>
            		</div>
    			</div>
				<div class='col-sm-6'></div>
   			</div>
  		</div> -->
  		
  		<hr>

  		<div class="row">
   			<label class="col-sm-2 control-label">By Status</label>
   			<div class="Status  col-sm-10">
    			<input type="checkbox" value="2" name="status[]" id="Awaiting-Approval">
    			<label for="Awaiting-Approval">Approved</label>
	            
	            <input type="checkbox" value="3" name="status[]" id="In-Printshop">
	            <label for="In-Printshop">In Printshop</label>
	            
	            <input type="checkbox" value="5" name="status[]" id="Dispatched">
	            <label for="Dispatched">Dispatched</label>
	            
	            <input type="checkbox" value="8" name="status[]" id="Completed">  
	            <label for="Completed"> Paid</label>
	            
	            <input type="checkbox" value="1" name="status[]" id="Cancel">   
	            <label for="Cancel">requested</label>
   			</div>
 		</div>
 		
 		<hr>
  		
  		<div class="row">
  			<div class="col-sm-12">
  				<button type="submit" class="login100-form-btn">Apply Filters</button>
  				<button type="button" class="cancel-btn">Cancel</button>
				</div>
			</div>
    </form>	
</div>