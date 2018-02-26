@extends('layouts.homee')
@section('title','Java Class')

@section('content')
<div class="container" style="width: 100%;">
	
	<table class="table table-bordered">
	<tr>
		<th>First_name</th>
		<th>Last_name</th>
		<th>Father_name</th>
		<th>Gender</th>
		

	</tr>

	<?php
foreach($show as $re)
{
	 ?>
	 <tr>
	 	<td><?php echo $re->st_first_name?></td>
	 	<td><?php echo $re->st_last_name?></td>
	 	<td><?php echo $re->st_father_name?></td>
	 	<td><?php echo $re->gender?></td>
	 </tr>
<?php
}
?>

</table>
</div>
@endsection