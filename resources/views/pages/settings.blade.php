@extends('layouts.admin')

@section('content')
<!-- Start content -->
<div class="content">
	<div class="container">
	<div class="row mar-space">
   <form>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
      <h3 class="title-header" style="padding:0 15px;">Personal Settings</h3>
     </div> 
     
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      	<div class="row white-background">
       <h4 class="content-title">Information</h4>
     
       	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pg-right">
		 <div class="form-group">
		  <label for="Name">Name:</label>
		  <input type="text" class="form-control" id="Name">
		</div>
		<div class="form-group">
		  <label for="designation">Designation:</label>
		  <input type="text" class="form-control" id="designation">
		</div>
		<div class="form-group">
		  <label for="Phone1">Phone 1 (primary)</label>
		  <input type="text" class="form-control" id="Phone1">
		</div>
		<div class="form-group">
		  <label for="Phone2">Phone 2</label>
		  <input type="text" class="form-control" id="Phone2">
		</div>
	   </div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pg-left">
				<div class="form-group">
		  <label for="address1">Address 1</label>
		  <textarea class="form-control" id="address1" rows="6" style="resize: none;"> </textarea>
		</div>
			<div class="form-group">
		  <label for="address2">Address 2</label>
		 <textarea class="form-control" id="address2" rows="6" style="resize: none;"> </textarea>
		</div>
		</div>
       </div> 
       </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      	<div class="row white-background">
      	<h4 class="content-title">Quota</h4>

		<table class="table">
			  <thead>
			    <tr>
			      
			      <th scope="col">Stationary</th>
			      <th scope="col">Quota left</th>
			      <th scope="col">Actual Quato </th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      
			      <td>Visting Cards</td>
			      <td>250</td>
			      <td>500</td>
			      <td><a href="">Extent Quota</a></td>
			    </tr>
			    <tr>
			    
			      <td>Letterheads</td>
			      <td>250</td>
			      <td>500</td>
			      <td><a href="">Extent Quota</a></td>
			    </tr>
			    <tr>
			      
			      <td>Envelope</td>
			      <td>250</td>
			      <td>500</td>
			      <td><a href="#"class="extendshow">Extent Quota</a>
				   <div class="sp-quantity" style="display: none;">
				    <div class="sp-minus fff"> <a class="ddd" href="#">-</a>
				    </div>
				    <div class="sp-input">
				        <input type="text" class="quntity-input" value="1" />
				    </div>
				    <div class="sp-plus fff"> <a class="ddd" href="#">+</a>
				    </div>
				</div>
			      </td>

			    </tr>
			        <tr>
			      
			      <td>Mugs</td>
			      <td><a href="#" data-toggle="modal" data-target="#myModal">Request Quota</a></td>
			      <td></td>
			       <td></td>
			    </tr>
			  </tbody>
			</table>


      </div>
  </div>
          <div class="container-login100-form-btn col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Send Changes for approval') }}
                                </button>
                                <button  class="cancel-btn">
                                    {{ __('Cancel') }}
                                </button>
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

<script type="text/javascript">
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
    });
});

</script>

@stop