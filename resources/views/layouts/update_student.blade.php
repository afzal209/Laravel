@extends('layouts.homee')
@section('title','Update info')

@section('content')
<div class="row">
    <div class="col-md-5">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <img src="img/add.png" width="250" height="300">
</div>
<div class="col-md-6">

                        <!-- <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left"> -->
                        			<h3 style="font-family: Lato;">Update Student Info:</h3>
                            		 
                        		<!-- </div> -->
                        		
                            <!-- </div> -->
                            <br>
                            <!-- <div class="form-bottom">
			                 -->    <form action="update_stude">
                                  
                       <input type="hidden" name="id" value="<?php echo $edd->id?>">
                                  <div class="form-group">
                                    <label>Enter Address:</label>
                                      <input type="text" name="add" style="border:2px solid orange;" placeholder="Address" value="<?php echo $edd->Address?>" class="form-control"> 
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Mobile-Number</label>
                                     <input type="number" style="border:2px solid orange;" name="st_ptcl"  pattern="^\d{4}-\d{3}-\d{4}$"   placeholder="Enter Mobile Number" class=" form-control" value="<?php echo $edd->Mobile_Number?>" required="Enter Ptcl Number ">
                                    </div>
			                        <button type="submit" class="btn btn-danger" style="float: right;">Add</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>

</div>
@endsection