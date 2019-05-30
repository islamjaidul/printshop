@extends('layouts.admin')

@section('content')
<!-- <link href="https://fooplugins.github.io/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

 <div class="row orderplacedmessage">
  	<div class="col-lg-12">
  		<h3>New Order has been placed <span><a href="#">Cancel Order</a><a href="#">Cancel Extension Request</a></span></h3>
  	</div>
  </div>

<!-- Start content -->
<div class="content admin-order">
	<div class="container">
	<div class="row mar-space">
   <form>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
      <h3 class="title-header">Users
    
      <span class="header_icon">
      	<span class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:initial;"><i class="fa fa-plus-circle"aria-hidden="true"></i></a>
        <span class="dropdown-menu">
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Add-New-User">Add New User</a>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#">Download import file</a>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Edit-Current-Information">Upload import file</a>
          
        </span>
    </span> 
      



      <a href="#" data-toggle="modal" data-target="#addneworder" style="color:initial;"> <i class="fa fa-search" aria-hidden="true"></i></a>
      </span>
      </h3>
     </div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white-background1" style="postion:relative;">
     	 <i class="fa fa-filter" id="filtericonShowHide"></i>

     	 <div id="filterShowHide" class="col-lg-11 col-md-11 col-sm-11 col-xs-11 filterstyle" style="display: none;">
			<h4 class="modal-title content-title" style="padding: 15px 0;"> Filters</h4>
			<span class="filterhidetext">No Filters applied</span>
			<p style="margin-top: 15px; display:none;"><span class="Stationaryfilter">Envelopes <i class="fa fa-times" aria-hidden="true"></i> </span> <span class="Stationaryfilter">In Printshop <i class="fa fa-times" aria-hidden="true"></i></span>
			<span class="statusfilter">Completed <i class="fa fa-times" aria-hidden="true"></i></span></p>
			<form>
			<div class="row">
			<label class="col-sm-2 control-label">By Stationary</label>
			<div class="Stationary  col-sm-10">
           <input type="checkbox" value="Envelopes" id="Envelopes" name="Stationary"><label for="Envelopes"> Envelopes</label>
           <input type="checkbox" value="Letterheads" id="Letterheads" name="Stationary">  <label for="Letterheads"> Letterheads</label>
           <input type="checkbox" value="Visting cards" id="Vistingcards" name="Stationary">   <label for="Vistingcards">Visting cards</label>
           <input type="checkbox" value="Mugs" id="Mugs" name="Stationary">  <label for="Mugs"> Mugs</label>
         
           </div>
           </div>
           <hr>
           	<div class="row">
           <label class="col-sm-2 control-label">By Date</label>
           <div class="datefrom col-sm-10">
           <div class='col-sm-3'>
            
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" placeholder="From Date" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            
        </div>
         <div class='col-sm-3'>
          
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" placeholder="To Date" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            
        </div>
        <div class='col-sm-6'></div>
           	
           </div>
          </div>
              <hr>
              <div class="row">
           <label class="col-sm-2 control-label">By User</label>
           <div class="datefrom col-sm-10">
           <div class='col-sm-3'>
           <input type='text' class="form-control" placeholder="Type User Name" />  
          
            
        </div>
         <div class='col-sm-3'>
          
             
            
        </div>
        <div class='col-sm-6'></div>
            
           </div>
          </div>
          <hr>
          	<div class="row">
           <label class="col-sm-2 control-label">By Status</label>
           	<div class="Status  col-sm-10">
			<input type="checkbox" value="Awaiting Approval" name="Status" id="Awaiting-Approval">   <label for="Awaiting-Approval">Awaiting Approval</label>
            <input type="checkbox" value="In Printshop" name="Status" id="In-Printshop">   <label  for="In-Printshop">In Printshop</label>
            <input type="checkbox" value="Completed" name="Status" id="Completed">  <label  for="Completed"> Completed</label>
            <input type="checkbox" value="Dispatched" name="Status" id="Pending-payment">   <label  for="Pending-payment">Pending payment</label>
            <input type="checkbox" value="Dispatched" name="Status" id="paid">   <label  for="paid">paid</label>
            <input type="checkbox" value="Cancel" name="Status" id="Cancel">   <label  for="Cancel">Cancel</label>
           </div>
         </div>
         <hr>
          	<div class="row">
          	<div class="col-sm-12">
          <button type="button" class="login100-form-btn">Apply Filters</button>
          <button type="button" class="cancel-btn">Cancel</button>
      </div>
      </div>
            </form>	
        </div>

      <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Make-Admin"  >Make Admin</a>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Delete-Users">Delete Users</a>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Assign-Admin">Assign Admin</a>
            <a href="#" class="dropdown-item">Approve Request</a>
            <a href="#" class="dropdown-item"  data-toggle="modal" data-target="#Edit-Dept">Edit Department</a>
            <a href="#" class="dropdown-item">Edit Designation</a>
            <a href="#" class="dropdown-item">Edit Address</a>
        </div>
    </div>        
     	<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<table class="table" data-toggle-column="First">
	<thead>
		<tr>
			<th data-breakpoints="xs"><input type="checkbox" value="" name="header-row" id="header-row"><label  for="header-row"></label></th>
			<th data-breakpoints="xs">User Name</th>
			<th data-breakpoints="xs">Department</th>
			<th>Quota Used</th>
			<th data-breakpoints="xs">Open Orders</th>
			<th>Billed amount</th>
			<th data-breakpoints="xs sm">Open Requests</th>
			<th data-breakpoints="xs sm">Actions</th>
			<th data-breakpoints="all" data-title="Order status">Actions</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row1"><label  for="row1"></label></td>
			<td>Amit Kulkarni</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>300/450</td>
			<td>4</td>
			<td>Rs 2100</td>
			<td><a href="#" data-toggle="modal" data-target="#Extend-Quota">Extend Quota</a><p style="font-size:12px; font-weight:normal;padding-top: 5px;">Visiting Cards</p></td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row2"><label  for="row2"></label></td>
			<td>Alfred Cain</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>250/600</td>
			<td>-</td>
			<td>Rs 2100</td>
			<td>-</td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row3"><label  for="row3"></label></td>
			<td>Anuo Pathak</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>250/600</td>
			<td>1</td>
			<td>Rs 2100</td>
			<td>-</td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>

		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row4"><label  for="row4"></label></td>
			<td>Bhargavi Bhosle</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>250/600</td>
			<td>1</td>
			<td>Rs 2100</td>
			<td><a href="#"  data-toggle="modal" data-target="#Extend-Quota">Extend Quota</a><p style="font-size:12px; font-weight:normal;padding-top: 5px;">Visiting Cards, Mug</p></td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row4"><label  for="row4"></label></td>
			<td>Bejimin Jones</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>300/450</td>
			<td>-</td>
			<td>Rs 2100</td>
			<td>-</td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row5"><label  for="row5"></label></td>
			<td>Damodar Patil</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>250/600</td>
			<td>3</td>
			<td>Rs 2100</td>
			<td>-</td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row6"><label  for="row6"></label></td>
			<td>Ramesh K S</td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>300/450</td>
			<td>-</td>
			<td>Rs 2100</td>
			<td>-</td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="" name="row" id="row7"><label  for="row7"></label></td>
			<td>Rammohan M P </td>
			<td>HR Team  <p style="font-size:12px;font-weight:normal;padding-top: 5px;">HR Manager</p></td>
			<td>300/450</td>
			<td>4</td>
			<td>Rs 2100</td>
			<td>-</td>
			<td>
			<div class="dropdown view-more">
		     <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
		     <div class="dropdown-menu">
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#approve-order">Remove Admin permission</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Delete User</a>
		      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#Cancel-order">Assign Admin</a>
		     </div>
		     </div> 
			</td>
			<td></td>
		</tr>
	</tbody>
</table>

</div>
</div>
</div>



     </div>	
     </form>
      </div> <!--row-->
	</div> <!-- container -->
</div> <!-- content -->

 	 <!-- add new order -->
  <div class="modal fade" id="addneworder" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title"> Add New Order</h4>
     
        </div>
        <div class="modal-body">
          <form>
	    <div class="row">      	
	      <div class="col-sm-4">
	      <div class="form-group">
	      <label class="control-label">Choose Stationary</label>
	     <select class="selectpicker">
		  <option>Visiting Cards</option>
		  <option>Letterheads</option>
		  <option>Envelope</option>
		  <option>Mugs</option>
		</select>

	      </div>
	      </div>
	       
	      <div class="col-sm-4">
	       <div class="form-group">
	      <label class="control-label">Select Quantity</label>
	       <select class="selectpicker">
		  <option>50</option>
		  <option>100</option>
		  <option>200</option>
		  <option>250</option>
		</select>
	        <label class="control-label" style="margin-top: 5px;">Remaining Quota 250</label>
	      </div>
	      </div>
	      <div class="col-sm-4"> 
	      <div class="form-group">
	      <a href="#"class="extendshow"style="position: relative;top: 35px;">Extent Quota</a>
	      <div class="extend-hide-show" style="display: none;"><a href="#">Extent Quota Only</a></div>
	      <div class="sp-quantity" style="display: none;">

	      <div class="sp-minus fff"> <a class="ddd" href="#">-</a>
	      </div>
	      <div class="sp-input">
	      <input type="text" class="quntity-input" value="1" />
	      </div>
	      <div class="sp-plus fff"> <a class="ddd" href="#">+</a>
	      </div>
	      </div>
	      </div>
	    </div>
	    </div>
	    <div class="row">      	
	      <div class="col-sm-6">
	      <div class="form-group">
	      <label class="control-label">Preview</label>
			 <ul class="nav nav-tabs new-order-preview">
			    <li class="front-tab active" ><a data-toggle="tab" href="#Front-preview">Front</a></li>
			    <li class="back-tab"><a data-toggle="tab" href="#Back-preview">Back</a></li>
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
	      <label class="control-label">Editable sections <span class="front-hidden">(8 fields)</span><span  style="display: none;" class="back-hidden">(None)</span></label>

	      <div class="front-hidden">
	       <div class="row">
		      <div class="col-sm-6">
		      	<label class="control-label">Name</label>
		          <input class="form-control" id="username" type="text"  value="Sundermohan p">

		      </div>
		        <div class="col-sm-6">
		      	<label class="control-label">Designation</label>
		          <input class="form-control" id="username" type="text"  value="Sundermohan p">

		      </div>
	      </div>
	        <div class="row">
		      <div class="col-sm-6">
		      	<label class="control-label">Phone 1</label>
		          <input class="form-control" id="username" type="text"  value="+12 234 456 789">

		      </div>
		        <div class="col-sm-6">
		      	<label class="control-label">Phone 2</label>
		          <input class="form-control" id="username" type="text"  value="+12 432 334 4456">

		      </div>
	      </div>
	  
	          <div class="row">
		      <div class="col-sm-6">
		      	<label class="control-label">Address</label>
		         <select class="selectpicker">
				  <option>Your street,Main avenue,Block NO 23,Bangalore,Karnataka 560102</option>
				  <option>Other Street,43th Main,sector 3,Opp Some building,Bangalor</option>
				
				</select>

		      </div>
		        <div class="col-sm-6">
		
		      </div>
	      </div>
	     </div>

	     <div class="back-hidden"style="display:none;" >No Editable Fields</div>
	 
	      </div>

	      </div>
	       </div>
        </form>
  
    
        <div class="modal-footer">
          <button type="button" class="login100-form-btn">Place Order</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script src="https://fooplugins.github.io/FooTable/compiled/footable.js"></script> -->

<!-- Filter Option -->

 	 <!-- Extend Quota -->
  <div class="modal fade Extend-Quota" id="Extend-Quota"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title"> Extend Quota</h4>
     </div>
        <div class="modal-body">
        <div class="row">
        <p style="padding-left: 8px;">Extend Quota for the following users</p>	
         <div class="col-md-4">
         	<h4><b>Sundermohan Shetty</b></h4>
         </div>
	     <div class="col-md-4">
	     <p style="font-size:12px;font-weight:normal;padding-top: 5px;">Stationary</p>	
	     <select class="selectpicker">
            
            <option>Visting Card</option>
            <option>Letter Heads</option>
            <option>Mugs</option>
            <option>Envelopes</option>
            
          </select>
          <p style="font-size:12px;font-weight:normal;padding-top: 5px;">Stationary</p>	
	     </div>
	     <div class="col-md-4">
	     	<div><a href="#" style="font-weight: normal;">Extend Quota by</a></div>
	     <div class="sp-quantity">

	      <div class="sp-minus fff"> <a class="ddd" href="#">-</a>
	      </div>
	      <div class="sp-input">
	      <input type="text" class="quntity-input" value="1" />
	      </div>
	      <div class="sp-plus fff"> <a class="ddd" href="#">+</a>
	      </div>
	      </div>	     
	     </div>
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn"> Extend Quota</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

	 <!-- Edit Dept -->
  <div class="modal fade Edit-Dept" id="Edit-Dept"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title"> Edit Department</h4>
     </div>
        <div class="modal-body">
        <div class="row">
        <p style="padding-left: 8px;">2 Users selected</p>	
	     <div class="col-md-6">
	    <label style="opacity: 0.7; font-size:18px;">Choose Department</label>
	     <select class="selectpicker" style="font-size:18px;">
            
            <option>HR Manager</option>
            <option>Finace Manager</option>
            <option></option>
            <option></option>
            
          </select>
         
	     </div>
	     <div class="col-md-6">
	     	
	   	     
	     </div>
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn"> Edit Department</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

	 <!-- Assign Admin -->
  <div class="modal fade Assign-Admin" id="Assign-Admin"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title"> Assign Admin</h4>
     </div>
        <div class="modal-body">
        <div class="row">
        <p style="padding-left: 8px;">Assign following users to admin</p>
        <p style="padding-left: 8px;">Amit Kulkarni</p>
        <p style="padding-left: 8px;">Alfred Cain</p>	
	     <div class="col-md-6">
	    <label style="opacity: 0.7; font-size:18px;">Choose Admin</label>
	     <select class="selectpicker" style="font-size:18px;">
            
            <option>Amit Kulkarni</option>
            <option>Alfred Cain</option>
            <option></option>
            <option></option>
            
          </select>
         
	     </div>
	     <div class="col-md-6">
	     	
	   	     
	     </div>
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn"> Assign Admin</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

 	 <!-- Delete Users -->
  <div class="modal fade Delete-Users" id="Delete-Users"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title">Delete Users</h4>
     </div>
        <div class="modal-body">
        <div class="row">
  
	     <div class="col-md-12">
	         <p style="padding-left: 8px; padding-bottom: 10px;">Are you sure you want to delete the following users Admin</p>
        <p style="padding-left: 8px;">Amit Kulkarni</p>
        <p style="padding-left: 8px;">Alfred Cain</p>	
	     	
	   	    <p style="padding-left: 8px; padding-top: 10px;">This action will disable user’s login and is not reversable</p>   
	     </div>
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn"> Delete Users</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

 	 <!-- Make Admin -->
  <div class="modal fade Make-Admin" id="Make-Admin"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title">Make Admin</h4>
     </div>
        <div class="modal-body">
        <div class="row">
  
	     <div class="col-md-12">
	         <p style="padding-left: 8px; padding-bottom: 10px;">Are you sure you want to make the following users Admin
</p>
        <p style="padding-left: 8px;">Amit Kulkarni</p>
        <p style="padding-left: 8px;">Alfred Cain</p>	
	 
	     </div>
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn">Make Admin</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

   <!-- Add New User -->
 <div class="modal fade Add-New-User" id="Add-New-User"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title"> Add New User</h4>
     </div>
        <div class="modal-body">
        <div class="row">
       <div class="col-md-6">
	    <label class="control-label">Name</label>
		<input class="form-control" id="username" type="text" value="">

	     </div>
	      <div class="col-md-6">
	    	  <label class="control-label">Department</label>
	     <select class="selectpicker">
            
            <option>HR Team</option>
            <option>Fianace Team</option>
            <option></option>
            <option></option>
            
          </select>

	     </div>
       </div>
       <div class="row">
       <div class="col-md-6">
       	<label class="control-label">Designation</label>
	     <select class="selectpicker">
            <option>HR Manager</option>
            <option>Fianace Manager</option>
            <option></option>
            <option></option>
         </select>
	 </div>
	 <div class="col-md-6">
	    <label class="control-label">Email</label>
		<input class="form-control" id="username" type="Email" value="">
	 </div>
       </div>

        <div class="row">
       <div class="col-md-6">
       	<label class="control-label">Admin</label>
	     <select class="selectpicker">
            <option>HR Manager</option>
            <option>Fianace Manager</option>
            <option></option>
            <option></option>
         </select>
	 </div>
	 <div class="col-md-6">
	   
	 </div>
       </div>
        <div class="row">
       <div class="col-md-7">
       	<label class="control-label">Phone</label>
		<input class="form-control" id="username" type="text" value="" style="width:85%;">
		<input class="form-control" id="username" type="text" value="" style="width:85%; margin-top: 20px; ">
		 <a href="#"  href="#" data-toggle="modal" data-target="" style="color:initial;"><i class="fa fa-plus-circle"aria-hidden="true"></i></a>
	 </div>
	
	 <div class="col-md-5">
	   
	 </div>
       </div>
        <div class="row">
       <div class="col-md-12">
       	<label class="control-label">Address</label>
		<input class="form-control" id="Address" type="text" value="" style="width:95%;">
		<input class="form-control" id="Address" type="text" value="" style="width:95%; margin-top: 20px; ">
		<a href="#"  href="#" data-toggle="modal" data-target="" style="color:initial;"><i class="fa fa-plus-circle modal-second"aria-hidden="true"></i></a>
			
	 </div>
	 
	
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn">Save Changes</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

   <!-- Edit-Current-Information -->
 <div class="modal fade Edit-Current-Information" id="Edit-Current-Information"  role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title content-title"> Edit Current Information</h4>
     </div>
        <div class="modal-body">
        <div class="row">
       <div class="col-md-6">
	    <label class="control-label">Name</label>
		<input class="form-control" id="username" type="text" value="">

	     </div>
	      <div class="col-md-6">
	    	  <label class="control-label">Department</label>
	     <select class="selectpicker">
            
            <option>HR Team</option>
            <option>Fianace Team</option>
            <option></option>
            <option></option>
            
          </select>

	     </div>
       </div>
       <div class="row">
       <div class="col-md-6">
       	<label class="control-label">Designation</label>
	     <select class="selectpicker">
            <option>HR Manager</option>
            <option>Fianace Manager</option>
            <option></option>
            <option></option>
         </select>
	 </div>
	 <div class="col-md-6">
	    <label class="control-label">Email</label>
		<input class="form-control" id="username" type="Email" value="">
	 </div>
       </div>

        <div class="row">
       <div class="col-md-6">
       	<label class="control-label">Admin</label>
	     <select class="selectpicker">
            <option>HR Manager</option>
            <option>Fianace Manager</option>
            <option></option>
            <option></option>
         </select>
	 </div>
	 <div class="col-md-6">
	   
	 </div>
       </div>
        <div class="row">
       <div class="col-md-7">
       		<label class="control-label">Phone</label>
		<input class="form-control" id="username" type="text" value="" style="width:85%;">
		<input class="form-control" id="username" type="text" value="" style="width:85%; margin-top: 20px; ">
		 <a href="#"  href="#" data-toggle="modal" data-target="" style="color:initial;"><i class="fa fa-plus-circle"aria-hidden="true"></i></a>
		 </div>
	 <div class="col-md-5">
	   
	 </div>
       </div>
        <div class="row">
        <div class="col-md-12">
       <label class="control-label">Address</label>
		<input class="form-control" id="Address" type="text" value="" style="width:95%;">
		<input class="form-control" id="Address" type="text" value="" style="width:95%; margin-top: 20px; ">
		<a href="#"  href="#" data-toggle="modal" data-target="" style="color:initial;"><i class="fa fa-plus-circle modal-second"aria-hidden="true"></i></a>
	   </div>
       </div>
      
        <div class="modal-footer">
          <button type="button" class="login100-form-btn">Save Changes</button>
          <button type="button" class="cancel-btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

		


<script type="text/javascript">

	jQuery(function($){
	$('.table').footable();
    });
	$(".ddd").on("click", function () {

    var $button = $(this);
    var oldValue = $button.closest('.sp-quantity').find("input.quntity-input").val();

    if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }

    $button.closest('.sp-quantity').find("input.quntity-input").val(newVal);

});
$(document).ready(function(){
    $('.extendshow').click(function() {
      $('.sp-quantity').show();
      $('.extendshow').hide();
      $('.extend-hide-show').show();
    });
      $('.back-tab').click(function() {
      $('.back-hidden').show();
      $('.front-hidden').hide();
      
    });
      $('.front-tab').click(function() {
      $('.front-hidden').show();
      $('.back-hidden').hide();
      
    });
    $("#filtericonShowHide").click(function(){
    $("#filterShowHide").toggle();
	}); 
  
 
     // $(".Stationary input[type=checkbox]").change(function(){
     //        var ck_string = "";
     //        $.each($("input[name='Stationary']:checked"), function(){            
     //         ck_string += $(this).val()+"<i class='fa fa-times filterclose' aria-hidden='true'></i>";   
            
     //        });
     //        if (ck_string ){
     //            ck_string = ck_string .substring();
     //            $(".Stationaryfilter").html(""+ ck_string + "");
     //             $(".filterhidetext").hide(); 
     //            $('.filterclose').click(function() {
     //           $('input[name=Stationary]').prop('checked', false);
     //             $(".Stationaryfilter").hide(); 
     //             $(".filterhidetext").show();   
     //            });
     //        }
           
     //    });

      $('#header-row').click(function(e){
      $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});
});
 
  $(function () {
                $('#datetimepicker1,#datetimepicker2').datetimepicker({
                     pickTime: false 
                });
            });

 
</script>
<style>
	.sp-quantity {float:left;
    padding-left: 4px;
    padding-top: 8px;
	}
	span.glyphicon-calendar.glyphicon {
    font-style: normal;
}
.table.footable-1 > tbody > tr > td, .table > thead > tr > th {
    text-align: left;
    vertical-align: middle;
}
.title-header [type="checkbox"]:not(:checked) + label:before,.title-header [type="checkbox"]:checked + label:before {
	top:5px;
}
.title-header [type="checkbox"]:not(:checked) + label:after,.title-header [type="checkbox"]:checked + label:after {
	 top: 8px;
}
.admin-order .filterstyle {
    position: absolute;
    min-height: 462px;}
    .modal .bootstrap-select .dropdown-toggle {font-size:16px;}
    

.header_icon span.dropdown.view-more {
	    top: 12px;
}


</style>	

@stop