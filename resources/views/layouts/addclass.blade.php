@extends('layouts.homee')
@section('title','addclass')

@section('content')

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="font-family: Lato;">Add Class:</h3>
                            		
                        		</div>
                        		
                            </div>
                            <br>    
                            <div class="form-bottom">
			                    <form role="form" action="add_clas">
                                  
                                  
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">class name</label>
			                        	<input type="text" name="cl_name" placeholder="Enter class name" class=" form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Monthly Fees:</label>
			                        	<input type="number" name="month_fee" placeholder="Enter Monthly Fees" class="form-control" >
			                        </div>
			                        <button type="submit" class="btn btn-primary">Add</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endsection