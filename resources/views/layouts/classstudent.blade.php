@extends('layouts.homee')

@section('title','student')

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
			
		<a href="addclass" class="btn btn-danger" >Add Class</a>
			
		</div>
		<div class="scroll" >
		<table class="table table-active table-striped" style="margin-top: 20px">
			<tr>
				<th>Class Name</th>
				<th>Monthly Fee</th>
				<th>Action</th>
			</tr>
			<?php

foreach( $sho as $re)
{

			?>
			<tr>
				<td><?php echo $re->class_name?></td>
				<td><?php echo $re->Monthly_fee?></td>
				<td><a href="edit?id=<?php echo $re->id?>" class="btn btn-primary">Update Fees</a></td>
			</tr>
<?php
}
?>
		</table>

	</div>
@endsection