@extends('layouts.homee')

@section('title', 'View')

@section('content')
<table border="table table-bordered">
	<tr>
		<th>Class name</th>
		<th>first name</th>
		<th>last name</th>
		<th>father name</th>
		<th>Gender</th>
	</tr>
	<?php


foreach($show as $joinn)
{
	 ?>
	 <tr>
	 	<td><?php echo $joinn->class_name?></td>
	 	<td><?php echo $joinn->st_first_name?></td>
	 	<td><?php echo $joinn->st_last_name?></td>
	 	<td><?php echo $joinn->st_father_name?></td>
	 	<td><?php echo $joinn->gender?></td>
	 </tr>
<?php
}
?>
	



</table>
@endsection