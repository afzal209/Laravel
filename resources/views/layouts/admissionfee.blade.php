@extends('layouts.homee')

@section('title', 'Admission Fee')
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
			
		<a href="Add-Admission-Fee" class="btn btn-danger" >Add Class Admission-Fee</a>
			
		</div>
		<div class="scroll">
		<table class="table table-active table-striped" style="margin-top: 20px">
			<tr>
				<th>Class-Name</th>
				<th>Admission-Fee</th>
				<th>Action</th>
				
			</tr>
			<?php

foreach($s as $a)
{

			  ?>
			  <tr>
			  	<td><?php echo $a->class_name?></td>
			  	<td><?php echo $a->Admission_fee?></td>
			  	<td><a href="up?id=<?php echo $a->id?>" class="btn btn-danger">Update Fee</td>
			  </tr>
<?php
}
?>			
		</table>

	</div>



@endsection