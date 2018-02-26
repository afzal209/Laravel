@extends('layouts.homee')
@section('title','home')

@section('content')


		<center><label style="font-size: 30px; font-family:Garamond;" >Welcome To Online Billing System</label></center>
		<br>
		<br>
	<div>
		<table class="table table-bordered table-striped "  style="margin-top: 60px; ">
			<tr  >
				<td style=" font-family:Garamond; font-size: 20px;"><b>Total Paid</b>: 0 student</td>
				<td style=" font-family:Garamond; font-size: 20px;"><b>Total UnPaid</b>: 0 student</td>

			</tr>
			<tr>
				<td style=" font-family:Garamond; font-size: 20px;"><b>Total Student</b>:<?php echo $count?> student</td>
				<td style=" font-family:Garamond; font-size: 20px;"><b>Total Paid On Security</b>: 0</td>

			</tr>
		</table>
	</div>

	
@endsection

<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-user',
            	message: "Welcome {{session()->get('username')}}"

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>