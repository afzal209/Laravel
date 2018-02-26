@extends('layouts.homee')
@section('title', 'Student Logs')
@section('content')
<div class="page-header">
		<h1><b>Student Logs</b></h1>
	</div>
<style>
div.scroll {
    width: 100%;
    height: 400px;
    overflow: scroll;
}

div.hidden {
   
    width: 100%;
    height: 100px;
    overflow: hidden;
}
h1
{
	font-family: Garamond;
	font-size: 30px;


}
</style>
<div>
  <a href="printstudent" class="btn btn-danger">Print</a>
</div>

<div class="scroll" >
<table class="table table-bordered table-striped" style="margin-top: 20px">
	<tr>
		<th>CLASS</th>
		<th>ADMISSION FEE</th>
		<th>FIRST NAME</th>
		<th>LAST NAME</th>
		<th>FATHER NAME</th>
		<th>GENDER</th>
		<th>ADDRESS</th>
		<th>MOBILE NUMBER</th>
		<th>TIME</th>
	</tr>
	
<?php 

foreach($stlog as $addlog)
{



  ?>
  <tr>
  	<td><?php echo $addlog->st_class?></td>
  	<td><?php echo $addlog->std_Admission_fee?></td>
  	<td><?php echo $addlog->st_first_name?></td>
  	<td><?php echo $addlog->st_last_name?></td>
  	<td><?php echo $addlog->st_father_name?></td>
  	<td><?php echo $addlog->gender?></td>
  	<td><?php echo $addlog->Address?></td>
  	<td><?php echo $addlog->Mobile_Number?></td>
  	<td><?php echo $addlog->created_at?></td>
  </tr>
<?php
}
?>
</table>
</div>



@endsection