@extends('layouts.homee')
@section('title','Class Admission Fee')

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


<div class="scroll">
		<table class="table table-active table-striped" style="margin-top: 20px">
			<tr>
				<th>Addmision Fees</th>
				<th>Class Fees</th>
				<th>Security Fees</th>
				<th>Total Fees</th>
			</tr>

			<?php

foreach($fe as $f)
{

 $tol=$f->addmision_fees+$f->class_fee+$f->security_fees
			  ?>
			  <tr>
			  	<td><?php echo $f->addmision_fees?></td>
			  	<td><?php echo $f->class_fee?></td>
			  	<td><?php echo $f->security_fees?></td>
			  	<td><?php echo $tol?></td>
			  
			  </tr>

<?php
}
?>			
		</table>

	</div>	





@endsection