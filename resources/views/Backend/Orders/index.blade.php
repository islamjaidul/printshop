@extends('layouts.admin')

@section('content')

<!-- Start content -->
<div class="content">
	<div class="container">
	<div class="row mar-space">
   <form>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
		    <h3 class="title-header">Orders
		    	<span class="header_icon">
		        	<a href="#" data-toggle="modal" data-target="#addneworder" style="color:initial;"><i class="fa fa-plus-circle"aria-hidden="true"></i></a>
		        	<a href="#" data-toggle="modal" data-target="#addneworder" style="color:initial;"> <i class="fa fa-search" aria-hidden="true"></i></a>
		    	</span>
		    </h3>
	    </div>

     	<!-- Filter area -->
		@include('Backend.Orders.includes.filter-order')
		
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
						@foreach($orders as $index => $order) 
							<tr data-expanded="{{ $index == 0 ? 'true' : 'false' }}">
								<td>{{ $order->name }}</td>
								<td>{{ $order->quantity }}</td>
								<td>20/1/2017</td>
								<td>{{ $order->orderNo }}</td>
								<td>{{ $order->status }}</td>
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
									<span class="last-title">
										Expected date of Delievery<br> 03/03/2016 </br>In 4 days
									</span>
								</td>
							</tr>
						@endforeach
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
	@include('Backend.Orders.includes.add-order')
</div>


<!-- <script src="https://fooplugins.github.io/FooTable/compiled/footable.js"></script> -->

<!-- Filter Option -->
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

});

// $(function () {
// 	$('#datetimepicker1,#datetimepicker2').datetimepicker({
// 	     pickTime: false 
// 	});
// });
 
</script>
<style>
	.sp-quantity {float:left;
    padding-left: 4px;
    padding-top: 8px;
	}
	span.glyphicon-calendar.glyphicon {
    font-style: normal;
}

</style>

@stop

@push('styles') 
	<!-- <link href="https://fooplugins.github.io/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
@endpush