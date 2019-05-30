@extends('layouts.admin')

@section('content')
<!-- <link href="https://fooplugins.github.io/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet"> -->
<!-- Start content -->
<div class="content dashboard-page">
	<div class="container">
	<div class="row mar-space">
   <form>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
      <h3 class="title-header">Dashboard
      <span class="header_icon">
      <span class="dropdown plus-menu-icon">
      <i class="fa fa-plus-circle dropdown-toggle" data-toggle="dropdown"aria-hidden="true"></i>
      <span class="dropdown-menu">
            <a href="#" class="dropdown-item">New Order</a>
            <a href="#" class="dropdown-item">Add New User</a>
            <a href="#" class="dropdown-item">Import User </a>
        </span>
    </span>

      <i class="fa fa-search" aria-hidden="true"></i>
      </span>
      </h3>
     </div>

       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboardstyle" style="margin-bottom: 25px;">
       <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
       	<h3 class="dasboard-title">Open Orders</h3>
       	<span class="dasboard-count">121</span>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
       	<h3 class="dasboard-title">Pending Requests</h3>
       	<span class="dasboard-count">46</span>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
       	<h3 class="dasboard-title">Pending Invoices</h3>
       	<span class="dasboard-count">13</span>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
       	<h3 class="dasboard-title">Pending Bill Amount</h3>
       	<span class="dasboard-count">RS 5601 <a class="dasboard-pay" href="#">Pay</a></span>
       </div>
       </div>
       </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white-background1" style="margin-bottom: 25px;">
     	<!--  <i class="fa fa-filter"></i> -->
     	<h4 class="content-title">Products</h4>
     	<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	   <div class="row home-slider-spacing">
        <div class="col-sm-12">
         <div id="customers-products" class="owl-carousel">

       
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group38.png')}}" alt="">
                <div class="item-details">
									<h5>Visiting Cards</h5>
								    <h5><a data-toggle="modal" data-target="#addneworder" href="#">Place Order</a></h5>
								</div>
              </div>
            </div>
 
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group39.png')}}" alt="">
                <div class="item-details">
								<h5>Visiting Cards</h5>
								 <h5><a data-toggle="modal" data-target="#addneworder" href="#">Place Order</a></h5>
								</div>
              </div>
            </div>
    
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group40.png')}}" alt="">
                <div class="item-details">
								<h5>Envelopes</h5>
								 <h5><a data-toggle="modal" data-target="#addneworder" href="#">Place Order</a></h5>
								</div>
              </div>
            </div>
      
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group38.png')}}" alt="">
                <div class="item-details">
								<h5>Letter Heads</h5>
								<h5><a data-toggle="modal" data-target="#addneworder" href="#">Place order</a></h5>
								</div>
              </div>
            </div>
          
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group39.png')}}" alt="">
                <div class="item-details">
							    <h5>Envelopes</h5>
								 <h5><a data-toggle="modal" data-target="#addneworder" href="#" >Place Order</a></h5>
								</div>
              </div>
            </div>
    
          </div>
      
      </div>
     </div>
   </div>
</div>
</div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     	<div class="row">
     		 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0;">
     		 	
     	<div class="row  white-background1" style="margin-right: 25px;">
     		<div style="position:relative;">
     		<h4 class="content-title bottom-space">Pending Requests</h4>
     <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Approve Requests</a>
            <a href="#" class="dropdown-item">Deny Requests</a>
        </div>
    </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <table class="table " data-toggle-column="First">

	<tbody>
		<tr>
			<td><input type="checkbox" value="" name="Status" id="pending1"><label for="pending1"></label></td>
			<td><h4>Suresh Menon</h4></td>
			<td><span>Visting Cards</span><span style="float: right;"><b>100 extra</b></span></td>
			<td> <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Approve Requests</a>
            <a href="#" class="dropdown-item">Deny Requests</a>
        </div>
    </div> </td>
		</tr>
		<tr>
      <td><input type="checkbox" value="" name="Status" id="pending2"><label for="pending2"></label></td>
			<td><h4>Cole Roberson</h4></td>
			<td><span>Change designation to sr designer</span><span style="float: right;"><b></b></span></td>
			<td> <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Approve Requests</a>
            <a href="#" class="dropdown-item">Deny Requests</a>
        </div>
    </div> </td>
		</tr>
		<tr>
      <td><input type="checkbox" value="" name="Status" id="pending4"><label for="pending4"></label></td>
			<td><h4>Violet Leonard</h4></td>
			<td><span>Envelopes</span><span style="float: right;"><b>50 extra</b></span></td>
			<td> <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Approve Requests</a>
            <a href="#" class="dropdown-item">Deny Requests</a>
        </div>
    </div> </td>
		</tr>
		<tr>
      <td><input type="checkbox" value="" name="Status" id="pending3"><label for="pending3"></label></td>
			<td><h4>Sarah Brewer</h4></td>
			<td><span>Change designation and 100 extra</span><span style="float: right;"><b></b></span></td>
			<td>  <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Approve Requests</a>
            <a href="#" class="dropdown-item">Deny Requests</a>
        </div>
    </div>  </td>
		</tr>
		
		
	</tbody>
</table>
    <div class="see_all"> <a href="#" ><i>See All</i></a></div>
</div>
</div>
     		 	
     		 </div>
     		 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0;">
     		  	
     	<div class="row white-background1" style="margin-left: 25px;">
     		<div style="position:relative;">
     		<h4 class="content-title bottom-space">Invoices Due</h4>
     		  <div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Make Payment</a>
            <a href="#" class="dropdown-item">Request Extension</a>
            <a href="#" class="dropdown-item">Download Invoice</a>
        </div>
    </div>
</div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <table class="table " data-toggle-column="First">

	<tbody>
		<tr>
			 <td><input type="checkbox" value="" name="Invoices" id="Invoices"><label for="Invoices"></label></td>
			<td><h4>BKGPK90821</h4></td>
			<td><span>34 Orders</span></td>
			<td><span>Due Today</span></td>
      <td><h4>Rs 7894</h4></td>
			<td><div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
             <a href="#" class="dropdown-item">Make Payment</a>
            <a href="#" class="dropdown-item">Request Extension</a>
            <a href="#" class="dropdown-item">Download Invoice</a>
        </div>
    </div></td>
		</tr>
		<tr>
      <td><input type="checkbox" value="" name="Invoices" id="Invoices2"><label for="Invoices2"></label></td>
			<td><h4>GKRST90875</h4></td>
			<td><span>12 Orders</span></td>
			<td><span>Due Today</span></td>
       <td><h4>Rs 2245</h4></td>
			<td><div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Make Payment</a>
            <a href="#" class="dropdown-item">Request Extension</a>
            <a href="#" class="dropdown-item">Download Invoice</a>
        </div>
    </div></td>
		</tr>
		<tr>
       <td><input type="checkbox" value="" name="Invoices" id="Invoices3"><label for="Invoices3"></label></td>
			<td><h4>PQRSTF1223</h4></td>
			<td><span>5 Orders</span></td>
			<td><span>Due Tomorrow</span></td>
       <td><h4>Rs 1109</h4></td>
            <td><div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Make Payment</a>
            <a href="#" class="dropdown-item">Request Extension</a>
            <a href="#" class="dropdown-item">Download Invoice</a>
        </div>
    </div></td>
		</tr>
		<tr>
      <td><input type="checkbox" value="" name="Invoices" id="Invoices4"><label for="Invoices4"></label></td>
      <td><h4>GFRTY789456</h4></td>
			<td><span>10 Orders</span></td>
			<td><span>Due Today</span></td>
       <td><h4>Rs 404</h4></td>
			<td><div class="dropdown view-more">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Make Payment</a>
            <a href="#" class="dropdown-item">Request Extension</a>
            <a href="#" class="dropdown-item">Download Invoice</a>
        </div>
    </div></td>
		</tr>
		
	</tbody>
</table>
  <div class="see_all"> <a href="#"><i>See All</i></a></div>
</div>
</div>

     		 </div>
        </div>		
     	
</div>



     </div>	
     </form>
      </div> <!--row-->
	</div> <!-- container -->
</div> <!-- content -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p style="text-align:center;">Are you sure request Quota?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="login100-form-btn">Yes</button>
          <button type="button" class="cancel-btn">No</button>
        </div>
      </div>
    </div>
  </div>

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
<script type="text/javascript">
jQuery(function($){
	$('.table').footable();
});
jQuery(document).ready(function($) {
"use strict";
$('#customers-products').owlCarousel( {
		loop: true,
		center: true,
		items: 3,
		margin: 30,
		autoplay: true,
		dots:true,
    nav:true,
		autoplayTimeout: 8500,
		smartSpeed: 450,
  	navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items: 3
			}
		}
	});
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
});



</script>
<style>
	.sp-quantity {float:left;
    padding-left: 4px;
    padding-top: 8px;
	}
	.table.footable-1 > tbody > tr > td, .table.footable-1 > thead > tr > th,.table.footable-2 > tbody > tr > td, .table.footable-2 > thead > tr > th {
    text-align: left;
    vertical-align: middle;
    font-weight: normal;
    font-size: 16px;
  }
  .table.footable-1 > tbody > tr > td:first-child, .table.footable-1 > thead > tr > th:first-child,.table.footable-2 > tbody > tr > td:first-child, .table.footable-2 > thead > tr > th:first-child  {
   vertical-align: top;
}
</style>


@stop