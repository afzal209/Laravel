@extends('layouts.homee')
@section('title','Class Admission Fee')

@section('content')
    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="font-family: Lato;">Update Admission Fee:</h3>
                            		
                        		</div>
                        		
                            </div>
                            <br>
                            <div class="form-bottom">
			                    <form role="form" action="up_fee">
                    <input type="hidden" name="id" value="<?php echo $e_fee->id?>">
			                        

                                    <div class="form-group">
                                        <label>Monthly Fee:</label>
                                <input type="number" name="adm_fee" class="form-control" style="border:2px solid orange;" required="" value="<?php echo $e_fee->Admission_fee?>">
                                    </div>

                                    <div class="form-group">
                                        
                                    </div>
			                        <button type="submit" class="btn btn-danger">Add</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endsection