@extends('layouts.homee')
@section('title', 'security')
@section('content')
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
</style>
	<div class="container" style="width:100%;">
<form action="security_fee">
	<label>Select Class-name:</label>
	<select class="form-control" name="sel_cla" style="border:2px solid orange;">
<?php
if(isset($cl))
	{
foreach($cl as $class)
{
	
  ?>
  <option value="<?php echo $class->class_name?>"><?php echo $class->class_name?></option>
<?php
}
}

?>
	</select>
	<br>
	<br>
	<label>Security :</label>
	<input type="number" name="sec" style="border:2px solid orange;" name="security_amount" class="form-control">
	<br>
	<br>
	<input type="submit" value="Add Security" class="btn btn-danger" style="float:right;" >
</form>

<br>
<br>
<br>
<br>
<div class="scroll">
<table class="table table-bordered table-striped">
	<tr>
		<th>Class Name</th>
		<th>Security Fee</th>
	</tr>
<?php
if(isset($sc))
		{
	foreach($sc as $sec)
	{
		

?>
<tr>
	<td><?php echo $sec->class_name?></td>
	<td><?php echo $sec->security_amount?></td>
</tr>
<?php
	}
}
	?>
		

</table>
</div>
</div>
@endsection