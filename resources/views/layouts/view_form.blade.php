@extends('layouts.homee')
@section('title','View Class')

@section('content')
<table class="table table-bordered table-striped">
	<tr>
		<th>Class Name</th>
		<th>View</th>
	</tr>

	<?php

foreach ($shif as $d) {
	

	?>
	<tr>
		<td><?php echo $d->class_name?></td>
		<td><a href="vieww?id=<?php echo $d->id?>" class="btn btn-danger">View Current Class Student</a></td>

	</tr>

<?php
}
?>



</table>

@endsection