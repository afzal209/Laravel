
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('.p').click(function(){
	// 		window.print('.p1');
	// 	});	
	// });

	function printlayer(layer)
	{
		var g_print=window.open(",'name, ");
		var l_print=document.getElementById(layer);
		g_print.document.write(l_print.innerHTML.replace("Print Me"));

		g_print.document.close();
		g_print.print();
		g_print.close();
	}
</script>
<a href="#" id="p" onclick="javascript:printlayer('p_div')">Print On Paper</a>



<div id="p_div">
<table border="2">
	<tr>
		<th>Class</th>
		<th>Addnission Fee</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Father Name</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Mobile_Numberbile Number</th>
		
	</tr>
	<?php 

foreach($print as $printst)
{



  ?>
  <tr>
  	<td><?php echo $printst->st_class?></td>
  	<td><?php echo $printst->std_Admission_fee?></td>
  	<td><?php echo $printst->st_first_name?></td>
  	<td><?php echo $printst->st_last_name?></td>
  	<td><?php echo $printst->st_father_name?></td>
  	<td><?php echo $printst->gender?></td>
  	<td><?php echo $printst->Address?></td>
  	<td><?php echo $printst->Mobile_Number?></td>
  	
  
  </tr>
<?php
}
?>

</table>

</div>

