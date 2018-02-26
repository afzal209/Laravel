 @extends('layouts.homee')
@section('title', 'Add Student')
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
                        			<h3 style="font-family: Lato;">Student Info:</h3>
                            		 
                        		<!-- </div> -->
                        		
                            <!-- </div> -->
                            <br>
                            <!-- <div class="form-bottom">
			                 -->    <form action="add_class">
                                
                                  <div class="form-group">
                                    <label>Select Class Id:</label>
                                      <select name="st_id" class="form-control" style="border:2px solid orange;" required="">
                                          <?php
                                         foreach($showw as $add)
                                        {



                                        ?>
<option value="<?php echo $add->id?>"><?php echo $add->id?></option>
                                        <?php
                                        }
                                        ?>
                                      </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label>Choose Class:</label>
                                      <select name="st_class" class="form-control" style="border:2px solid orange;" required="">
                                          <?php
                                         foreach($showw as $add)
                                        {



                                        ?>
<option value="<?php echo $add->class_name?>"><?php echo $add->class_name?></option>
                                        <?php
                                        }
                                        ?>
                                      </select>
                                  </div>
                                <div class="form-group">
                                        
                                    <label>Enter Admission Fee:</label>
                                        <input type="number" style="border:2px solid orange;" name="std_Admission_fee" placeholder="Enter Admission Fee" class=" form-control" required="Enter First Name ">
                                    </div>          
			                    	<div class="form-group">
			                    		<label>Enter First-Name:</label>
			                        	<input type="text" style="border:2px solid orange;" name="st_fname" placeholder="Enter First Name" class=" form-control" required="Enter First Name ">
			                        </div>
			                        <div class="form-group">
			                        	<label>Enter Last-Name:</label>
			                        	    <input type="text" style="border:2px solid orange;" name="st_lname" placeholder="Enter Last Name" class=" form-control" required="Enter Last Name ">
			                        </div>
                                    <div class="form-group">
                                        <label>Enter Father-Name:</label>
                                            <input type="text" style="border:2px solid orange;" name="st_father" placeholder="Enter Father Name" class=" form-control" required="Enter Father Name ">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Gender</label>
                                      <select name="st_gend" class="form-control" style="border:2px solid orange;" required="">
                                          <option>Choose any One </option>
                                          <option>Male</option>
                                          <option>Female</option>

                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Enter Address:</label>
                                        <textarea cols="57" style="border:2px solid orange;" rows="5" placeholder="Address" name="add" class="form-control" required=""></textarea>
                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Mobile-Number</label>
                                     <input type="number" style="border:2px solid orange;" name="st_ptcl"  pattern="^\d{4}-\d{3}-\d{4}$"   placeholder="Enter Mobile Number" class=" form-control" required="Enter Ptcl Number ">
                                    </div>
			                        <button type="submit" class="btn btn-danger" style="float: right;">Add</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>

</div>
@endsection            