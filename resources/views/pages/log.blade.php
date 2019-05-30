@extends('layouts.admin')

@section('content')
<!-- <link href="https://fooplugins.github.io/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>


<!-- Start content -->
<div class="content">
	<div class="container">
   <div class="row mar-space">
     <form>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
        <h3 class="title-header">Change Log
          <span class="header_icon">
    <!--   <i class="fa fa-plus-circle"aria-hidden="true"></i>
      <i class="fa fa-search" aria-hidden="true"></i> -->
    </span>
  </h3>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 white-background1">
  <i class="fa fa-filter" id="filtericonShowHide"></i>
  <div id="filterShowHide" class="col-lg-11 col-md-11 col-sm-11 col-xs-11 filterstyle" style="display: none;">
   <h4 class="modal-title content-title" style="padding: 15px 0;"> Filters</h4>
   <span class="filterhidetext">No Filters applied</span>
   <p style="margin-top: 15px; display:none;"><span class="Stationaryfilter">Envelopes <i class="fa fa-times" aria-hidden="true"></i> </span> <span class="Stationaryfilter">In Printshop <i class="fa fa-times" aria-hidden="true"></i></span>
     <span class="statusfilter">Completed <i class="fa fa-times" aria-hidden="true"></i></span></p>
     <form>

      <div class="row" style="padding-top: 25px;">
       <label class="col-sm-2 control-label">By Date</label>
       <div class="datefrom col-sm-10">
         <div class='col-sm-3'>

          <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" placeholder="Frome Date" />
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
 <label class="col-sm-2 control-label">By Status</label>
 <div class="Status  col-sm-10">

   <input type="checkbox" value="Approved" id="Approved" name="Status"><label for="Approved">Approved</label>
   <input type="checkbox" value="Denied" id="Denied" name="Status"><label for="Denied"> Denied</label>

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
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <table class="table change-log">
     <thead>
      <tr>
       <th>Date</th>
       <th data-breakpoints="xs sm">Change Event</th>
       <th data-breakpoints="xs sm">Status</th>
       <th data-breakpoints="xs sm">Actions</th>

     </tr>
   </thead>
   <tbody>
    <tr>

     <td>20/1/2017</td>
     <td>Visting card Quato increased from 250 to 400</td>
     <td>Approved</td>
     <td></td>

   </tr>
   <tr>
     <td>28/12/2015</td>
     <td>Designation change from Jr designer to visual designer</td>
     <td>Denied</td>
     <td><a href="">Resend</a></td>

   </tr>
   <tr>
     <td>12/1/2015</td>
     <td>Address 1 added to your account</td>
     <td>Approved</td>
     <td></td>

   </tr>
   <tr>
     <td>12/1/2015</td>
     <td>Phone Number 1 changed +91978427069</td>
     <td>Approved</td>
     <td></td>
   </tr>
   <tr>
    <td>12/1/2015</td>
    <td>Password changed</td>
    <td>Approved</td>
    <td></td>
  </tr>
  <tr>
   <td>12/1/2015</td>
   <td>Phone Number 1 changed +91978427069</td>
   <td>Approved</td>
   <td></td>
 </tr>
 <tr>
  <td>12/1/2015</td>
  <td>Phone Number 1 changed +91978427069</td>
  <td>Denied</td>
  <td> <a href="">Resend</a></td>
</tr>
<tr>
 <td>12/1/2015</td>
 <td>Phone Number 1 changed +91978427069</td>
 <td>Approved</td>
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

<!-- <script src="https://fooplugins.github.io/FooTable/compiled/footable.js"></script> -->

<script type="text/javascript">
  jQuery(function($){
   $('.table').footable();
 });

  $(document).ready(function(){

    $("#filtericonShowHide").click(function(){
      $("#filterShowHide").toggle();
    }); 
  });
  $(function () {
    $('#datetimepicker1,#datetimepicker2').datetimepicker({
     pickTime: false 
   });
  });

</script>
<style>
span.glyphicon-calendar.glyphicon {
  font-style: normal;
}
.filterstyle {min-height:332px;}
</style>	

@stop