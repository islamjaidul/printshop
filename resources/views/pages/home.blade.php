@extends('layouts.admin')

@section('content')
<!-- <link href="https://fooplugins.github.io/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet"> -->
<!-- Start content -->
<div class="content">
	<div class="container">
	<div class="row mar-space">
   <form>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
      <h3 class="title-header">Home
      <span class="header_icon">
      <!-- <i class="fa fa-plus-circle"aria-hidden="true"></i>
      <i class="fa fa-search" aria-hidden="true"></i> -->
      </span>
      </h3>
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
									<h5>Visiting Cards <span>500 <br/><span>remaining <br/> Quota</span></span></h5>
								    <h5><a data-toggle="modal" data-target="#addneworder" href="#">Place Order</a></h5>
								</div>
              </div>
            </div>
 
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group39.png')}}" alt="">
                <div class="item-details">
								<h5>Visiting Cards<span>200 <br/><span>remaining <br/> Quota</span></span></h5>
								 <h5><a data-toggle="modal" data-target="#addneworder" href="#">Place Order</a></h5>
								</div>
              </div>
            </div>
    
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group40.png')}}" alt="">
                <div class="item-details">
								<h5>Envelopes<span>100 <br/><span>remaining <br/> Quota</span></span></h5>
								 <h5><a data-toggle="modal" data-target="#addneworder" href="#">Place Order</a></h5>
								</div>
              </div>
            </div>
      
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group38.png')}}" alt="">
                <div class="item-details">
								<h5>Letter Heads <span>200 <br/><span>remaining <br/> Quota</span></span></h5>
								<h5><a data-toggle="modal" data-target="#addneworder" href="#">Place order</a></h5>
								</div>
              </div>
            </div>
          
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="{{asset('/images/Group39.png')}}" alt="">
                <div class="item-details">
							    <h5>envelopes <span>100 <br/><span>remaining <br/> Quota</span></span></h5>
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
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white-background1">
     	<!--  <i class="fa fa-filter"></i> -->
     	<h4 class="content-title">Orders</h4>
     	<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <table class="table " data-toggle-column="First">
	<thead>
		<tr>
			<th data-breakpoints="xs">Name</th>
			<th>Quantity</th>
			<th>Date</th>
			<th data-breakpoints="xs">Order Number</th>
			<th data-breakpoints="xs sm">Status</th>
			<th data-breakpoints="xs sm">Actions</th>
			<th data-breakpoints="all" data-title="Order status">Actions</th>
		</tr>
	</thead>
	<tbody>
		<tr data-expanded="true">
			<td>Visting Cards</td>
			<td>200</td>
			<td>20/1/2017</td>
			<td>BKGPK90821</td>
			<td>In Printshop</td>
			<td><a href="#">Cancel Order</a></td>
			<td>
				<!-- Progress Tracker v2 -->
<ol class="progress-order" data-steps="4">
    <li class="done">
       
        <span class="step"><span>&#10004;</span></span>
       <span class="name">Order Approved</span>
    </li>
    <li class="done">
        
        <span class="step"><span>&#10004;</span></span>
      <span class="name">In Printshop</span>
    </li>
    <li class="active">
     
        <span class="step"><span>&#10004;</span></span>
         <span class="name">Dispatched</span>
    </li>
    <li>
        
        <span class="step"><span>&#10004;</span></span>
      <span class="name">Completed</span>
    </li>
</ol>
<span class="last-title">Expected date of Delievery<br> 03/03/2016 </br>In 4 days</span>
			</td>
		</tr>
		<tr>
			<td>Letterheads</td>
			<td>100</td>
			<td>28/1/2016</td>
			<td>GKRST90875</td>
			<td>Completed</td>
			<td><a href="#">Repeat</a></td>
			<td><ol class="progress-order" data-steps="4">
    <li class="done">
       
        <span class="step"><span>&#10004;</span></span>
       <span class="name">Order Approved</span>
    </li>
    <li class="active">
        
        <span class="step"><span>&#10004;</span></span>
      <span class="name">In Printshop</span>
    </li>
    <li>
     
        <span class="step"><span>&#10004;</span></span>
         <span class="name">Dispatched</span>
    </li>
    <li>
        
        <span class="step"><span>&#10004;</span></span>
      <span class="name">Completed</span>
    </li>
</ol>
<span class="last-title">Expected date of Delievery<br> 03/03/2016 </br>In 4 days</span>
</td>
		</tr>
		<tr>
			<td>Envelopes</td>
			<td>50</td>
			<td>12/12/2015</td>
			<td>PQRSTF1223</td>
			<td>Order Approved</td>
			<td><a href="#">Cancel Order</a></td>

		</tr>
		<tr>
			<td>Letterheads</td>
			<td>50</td>
			<td>12/5/2015</td>
			<td>GFRTY789456</td>
			<td>Dispached</td>
			<td><a href="#">Repeat</a></td>
		</tr>
		<tr>
			<td>Envelopes</td>
			<td>100</td>
			<td>2/2/2018</td>
			<td>RDESWT7894</td>
			<td>In Printshop</td>
			<td><a href="#">Cancel Order</a></td>
		</tr>
		<tr>
			<td>Envelopes</td>
			<td>50</td>
			<td>12/5/2015</td>
			<td>AASSDR78945</td>
			<td>Completed</td>
			<td><a href="#">Repeat</a></td>
		</tr>
		<tr>
			<td>Visting Cards</td>
			<td>300</td>
			<td>12/5/2015</td>
			<td>HJSTY25368</td>
			<td>In Printshop</td>
			<td><a href="#">Cancel Order</a></td>
		</tr>
		<tr>
			<td>Mugs</td>
			<td>20</td>
			<td>12/5/2018</td>
			<td>YSRRRT56565</td>
			<td>Completed</td>
			<td><a href="#">Repeat</a></td>
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
</style>


@stop