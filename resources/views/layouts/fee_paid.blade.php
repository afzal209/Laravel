@extends('layouts.homee')
@section('title','Php Class')

@section('content')
<div class="container" style="width: 100%;">
   <form role="form" action="paid_class">
                                  
                                  
					                 <div class="form-group">
					               		<label>Select Student Name:</label>
			                    		<select class="form-control">
			                    			<?php
                                        foreach($sho as $re)
                                        {

			                    			 ?>
	 <option value="<?php echo $re->st_first_name?>"><?php echo $re->st_first_name?></option>
													<?php
													}
													?>
			                    		</select>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Monthly Fees:</label>
			                        	<input type="number" name="month_fee" placeholder="Enter Monthly Fees" class="form-control" >
			                        </div>
			                        <button type="submit" class="btn btn-primary">Add</button>
			                    </form>	

</div>
@endsection