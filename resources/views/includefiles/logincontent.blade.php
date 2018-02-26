<div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 style="font-family:Garamond;">Online School Billing System</h3>
                            		
                        		</div>

                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="ins" method="POST">
                                   <!--   @if(session('response'))
                                    <div class="alert alert-success">
                                        {{session('response')}}
                                    </div>
                                    @endif -->

			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="email" name="email" placeholder="Email..." class="form-username form-control" id="form-username" autofocus="">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			                       <input type="submit" value="Login" class="btn btn-danger">
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>