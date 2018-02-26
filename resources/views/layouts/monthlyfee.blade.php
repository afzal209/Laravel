@extends('layouts.homee')
@section('title', 'Monthly Fee')
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
	
		<div >
			
		<a href="addstudent" class="btn btn-danger" >Add Student</a>
			
		</div>
		<div class="scroll">
		<table class="table table-active table-striped" style="margin-top: 20px">
			<tr>
				<th>Class Name</th>
				<th>Admission-Fee</th>
				<th>First-Name</th>
				<th>Last-Name</th>
				<th>Father-Name</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Mobile-Number</th>
				<th>Action</th>
			</tr>
			<?php

foreach($stu as $add)
{

			 ?>
			 <tr>
<td><?php echo $add->st_class?></td>
<td><?php echo $add->std_Admission_fee?></td>
<td><?php echo $add->st_first_name?></td>
<td><?php echo $add->st_last_name?></td>
<td><?php echo $add->st_father_name?></td>
<td><?php echo $add->gender?></td>
<td><?php echo $add->Address?></td>
<td><?php echo $add->Mobile_Number?></td>
<td><a href="u?id=<?php echo $add->id?>" class="btn btn-danger">Update</a></td>
			 </tr>
<?php
}
?>
		</table>

	</div>




@endsection