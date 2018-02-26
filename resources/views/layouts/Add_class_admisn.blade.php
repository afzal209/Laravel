@extends('layouts.homee')
@section('title','Class Admission Fee')

@section('content')
    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="font-family: Lato;">Add Admission Fee:</h3>
                            		
                        		</div>
                        		
                            </div>
                            <br>
                            <div class="form-bottom">
			                    <form role="form" action="add_admisn">
                                  
                                  
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">class name</label>
			                        	<input type="text" name="cla_name" placeholder="Enter class name" class=" form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Admission_fee:</label>
			                        	<input type="number" name="ad_fee" placeholder="Enter Class Admission Fees" class="form-control" >
			                        </div>
			                        <button type="submit" class="btn btn-danger">Add</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endsection