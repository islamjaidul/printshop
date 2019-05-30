<div class="modal fade" id="addneworder" role="dialog">
    <div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">
          			&times;
          		</button>
          		<h4 class="modal-title content-title"> Add New Order</h4>
     
        	</div>
			
        	<div class="modal-body">
        		<form>
        			<div class="row">
        				<div class="col-sm-4">
        					<div class="form-group">
        						<label for="user">User</label>
        						<select class="form-control" name="user" id="user">
        							<option value="0" selected>Select</option>
        						</select>
        					</div>
        				</div>
        			</div>

	    			<div class="row">      	
	      				<div class="col-sm-4">
	      					<div class="form-group">
	      						<label class="control-label">
		      						Choose Stationary
		      					</label>
							    <select id="stationary" class="form-control">
							    	<option value="" selected>Select</option>
									<option value="1">Visiting Cards</option>
									<option value="2">Letterheads</option>
									<option value="3">Envelope</option>
									<option value="4">Mugs</option>
								</select>
	      					</div>
	      				</div>
	       
	      				<div class="col-sm-4">
	       					<div class="form-group">
	      						<label class="control-label">Select Quantity</label>
								    <select id="quntity" class="form-control">
								    	<option value="0" selected>Select</option>
										<option value="50">50</option>
										<option value="100">100</option>
										<option value="200">200</option>
										<option value="250">250</option>
									</select>

	        					<label class="control-label" style="margin-top: 5px;">
	        						Remaining Quota 250
	        					</label>
	      					</div>
	      				</div>

	      				<div class="col-sm-4"> 
	      					<div class="form-group">
	      						<a href="#"class="extendshow"style="position: relative;top: 35px;">Extent Quota</a>
	      						<div class="extend-hide-show" style="display: none;">
	      							<a href="#">Extent Quota Only</a>
	      						</div>
	      						
	      						<div class="sp-quantity" style="display: none;">
	      							<div class="sp-minus fff"> 
	      								<a class="ddd" href="#">-</a>
	      							</div>
	      							
	      							<div class="sp-input">
	      								<input type="text" class="quntity-input" value="1" />
	      							</div>
	      							
	      							<div class="sp-plus fff"> 
	      								<a class="ddd" href="#">+</a>
	      							</div>
	      						</div>
	      					</div>
	    				</div>
	    			</div>

	    			<div class="row">      	
	      				<div class="col-sm-6">
	      					<div class="form-group">
	      						<label class="control-label">
		      						Preview
		      					</label>
								<ul class="nav nav-tabs new-order-preview">
								    <li class="front-tab active" >
								    	<a data-toggle="tab" href="#Front-preview">Front</a>
								    </li>
								    <li class="back-tab">
								    	<a data-toggle="tab" href="#Back-preview">Back</a>
								    </li>
								</ul>

			  					<div class="tab-content">
			    					<div id="Front-preview" class="tab-pane fade in active">
		        						<img src="{{asset('/images/visiting_card_print.png')}}" alt="Front" width="100%">
			    					</div>
								    <div id="Back-preview" class="tab-pane fade">
								      <img src="{{asset('/images/visiting_card_print.png')}}" alt="Back" width="100%" >
								    </div>
			   					</div>
	   
	      					</div>
	      				</div>
	       
	      				<div class="col-sm-6">
	       					<div class="form-group">
	      						<label class="control-label">
	      							Editable sections <span class="front-hidden">(8 fields)</span><span style="display: none;" class="back-hidden">(None)</span>
	      						</label>

	      						<div class="front-hidden">
	       							<div class="row">
		      							<div class="col-sm-6">
		      								<label class="control-label">Name</label>
		          							<input id="userName" class="form-control" type="text"  value="" readonly="">

		      							</div>
		        						
		        						<div class="col-sm-6">
		      								<label class="control-label">Designation</label>
		          							<input id="userDesignation" class="form-control" type="text"  value="" readonly="">
		      							</div>
	      							</div>
	        						
	        						<div class="row">
		      							<div class="col-sm-6">
		      								<label class="control-label">Phone 1</label>
		          								<input id="userPhone1" class="form-control" type="text"  value="" readonly="">
		      							</div>
		        						
		        						<div class="col-sm-6">
		      								<label class="control-label">Phone 2</label>
		          							<input id="userPhone2" class="form-control" type="text"  value="" readonly="">
		      							</div>
	      							</div>
	  
	          						<div class="row">
		      							<div class="col-sm-6">
		      								<label class="control-label">Address</label>
									        <select id="userAddress" class="form-control">
									        	<option value="" selected>Select Address</option>
												<option>Your street,Main avenue,Block NO 23,Bangalore,Karnataka 560102</option>
												<option>Other Street,43th Main,sector 3,Opp Some building,Bangalor</option>
											</select>

		      							</div>
		        						<div class="col-sm-6"></div>
	      							</div>
	     						</div>

	     						<div class="back-hidden"style="display:none;" >
	     							No Editable Fields
	     						</div>
	 
	      					</div>
	      				</div>
	       			</div>
        		</form>
      		</div>

      		<div class="modal-footer">
	          <button id="order-submit" type="button" class="login100-form-btn">Place Order</button>
	          <button type="button" class="cancel-btn">Cancel</button>
	        </div>
    </div>
  </div>

  @push('scripts') 
	<script>
		$("#stationary").attr('disabled', true);
		$("#quntity").attr('disabled', true);
		$("#userName").attr('disabled', true);
		$("#userDesignation").attr('disabled', true);
		$("#userPhone1").attr('disabled', true);
		$("#userPhone2").attr('disabled', true);
		$("#userAddress").attr('disabled', true);

		var url = "{{ env('APP_URL') }}/cpuser/users";
		$.ajax({
	        url: url,
	        type: 'GET',
	        dataType: 'json',
	        contentType: 'application/json; charset=utf-8',
	        success: function(res) {
	        	res.map(function(item) {
	        		$("#user")
	        		.append('<option value="'+item.id+'">' + item.name + '</option>');
	        	})
	        }
	    });

	    $("#user").on('change', function(e) {
	    	var userValue = Number($(this).val());
	    	console.log(userValue);
	    	if (userValue != 0) {
	    		$("#stationary").attr('disabled', false);
				$("#quntity").attr('disabled', false);
				$("#userName").attr('disabled', false);
				$("#userDesignation").attr('disabled', false);
				$("#userPhone1").attr('disabled', false);
				$("#userPhone2").attr('disabled', false);
				$("#userAddress").attr('disabled', false);

				var url = "{{ env('APP_URL') }}/cpuser/users/" + userValue;
				$.ajax({
			        url: url,
			        type: 'GET',
			        dataType: 'json',
			        contentType: 'application/json; charset=utf-8',
			        success: function(res) {
			        	$("#userName").val(res.name);
			        	$("#userDesignation").val(res.designation);
			        	$("#userPhone1").val(res.phone1);
			        	$("#userPhone2").val(res.phone2);
			        }
			    });
	    	} else {
	    		$("#stationary").attr('disabled', true);
				$("#quntity").attr('disabled', true);
				$("#userName").val("").attr('disabled', true);
				$("#userDesignation").val("").attr('disabled', true);
				$("#userPhone1").val("").attr('disabled', true);
				$("#userPhone2").val("").attr('disabled', true);
				$("#userAddress").val("").attr('disabled', true);
	    	}
	    })

	    $("#order-submit").on('click', function(e) {
	    	$("#stationary").attr('disabled', true);
	    		var stationary_id = $("#stationary").val();
				var quantity = $("#quntity").val();
				var name = $("#userName").val();
				var designation = $("#userDesignation").val();
				var phone1 = $("#userPhone1").val();
				var phone2 = $("#userPhone2").val();
				var address = $("#userAddress").val();

				var payload = {
					stationary_id,
					quantity,
					name,
					designation,
					phone1,
					phone2,
					address,
					_token: "{{ csrf_token() }}"
				};

				if (Number(stationary_id) == 0 || Number(quantity) == 0 || address == '')
				{
					alert("Please fillup stationary, quntity, userAddress correctly !!");
					return;
				}

				var url = "{{ env('APP_URL') }}/cpuser/orders/";
				
			    $.post(url, payload, function(data) {
			    	location.reload();
			    })
	    })
	</script>
  @endpush