@extends('frontend/base')
	
		
	@section('content')
		<section>
			<div class="breadcrumps-back">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="breadcrumps-heading">
								<h1>Shop</h1>
								<div class="breadcrumps-border"></div>
								<ul>
									<li> <a href="index.html"> Home</a> /</li>
									<li> <a href="#"> Shop</a></li>
									<li></li>
								</ul>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="shop-checkout" class="ptb-100">
			<div class="container">
                <div class="row">
					<div class="col-md-12">
						<div class="form-method-check">
							<p>
								<i class="fa fa-check-square" aria-hidden="true"></i> Want To log in? <a>Click Here</a>
							</p>
						</div>
						<div class="login-method pt-20">
							<form method="post" class="login contact-form">

								<p class="pb-20">
									If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.
								</p>

								<div class="col-xs-6">
									<label class="login-label" for="username">Name <span class="required">*</span></label>
									<input type="text" class="form-control" name="username" id="username" placeholder="Name">
								</div>
								<div class="col-xs-6">
									<label class="login-label" for="email">E-mail <span class="required">*</span></label>
									<input class="form-control" type="email" name="email" id="email" placeholder="Email">
								</div>

								
								<div class="col-xs-12 pt-20">
									<input type="hidden" id="_wpnonce" name="_wpnonce" value="">
									<input type="hidden" name="_wp_http_referer" value="">		
									<input type="submit" class="button btn-default" name="login" value="Log In">
									<input type="hidden" name="redirect" value="">
									<label class="check-label inline" for="rememberme">
									<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me		</label>
								</div>
								<div class="col-xs-12 pt-15 pb-20">
									<div class="lost-password">
										<a href="#">Forget Password?</a>
									</div>
								</div>
							</form>
						</div>
						
						<div class="row">
							<div class="col-md-12 check_responsive woocommerce-billing-fields">
								<!-- Product Row Two -->
								<div class="small-header">
									<h2>Billing Details</h2>
								</div>
							
								<form class="contact-form pt-20">
								
									<div class="col-xs-12">
										<div class="form-group">
											<p class="help-block">Your email address will not be published. Required fields are marked *</p>
											<label class="pt-20">Basic Information</label>
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputName1" placeholder="First Name*">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputName2" placeholder="Last Name*">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputName3" placeholder="Company Name">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail*">
										</div>
									</div>
									
									
									
									<div class="col-xs-12">
										<div class="dashed-border">
									</div>
										<div class="form-group pt-30">
											<label>Address</label>
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputName4" placeholder="Country*">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputEmail2" placeholder="City*">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputName5" placeholder="District/State">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Street*">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputName6" placeholder="Postal Code*">
										</div>
									</div>
									
									<div class="col-xs-6">
										<div class="form-group">
											<input type="text" class="form-control" id="exampleInputEmail4" placeholder="Apartment Address*">
										</div>
									</div>
									
									<div class="col-xs-12 check_responsive">
										<div class="checkbox">
											<label class="">
												<input type="checkbox"> Create An Account?
											</label>
											
											<p class="help-block">
												Create an account by entering the information below. If you are a new customer please login 
												at the top of the page.
											</p>
										</div>
									</div>
									
									<div class="col-xs-12">
										<div class="form-group">
											<input type="password" class="form-control" id="inputPassword3" placeholder="Password*">
										</div>
									</div>
									
									
								</form>
							</div>
							<div class="col-md-12 check_responsive">
								<div class="small-header">
									<h2>Your Order</h2>
								</div>
								
								<div class="billing-table pt-30">
									<table class="table">
										<thead>
											<tr>
												<th>Product</th>
												<th>Quantity </th>
												<th>Price</th>
											</tr>
										</thead>
											
										<tbody>
											<tr class="active">
												<td>Tamarind Juice</td>
												<td>1</td>
												<td>$300</td>
											</tr>
											<tr class="active">
												<td>Tamarind Juice</td>
												<td>1</td>
												<td>$300</td>
											</tr>
											<tr class="active">
												<td>Tamarind Juice</td>
												<td>1</td>
												<td>$300</td>
											</tr>
											<tr class="active">
												<td>Tamarind Juice</td>
												<td>1</td>
												<td>$300</td>
											</tr>
											<tr class="active">
												<td class="billing-total">Total</td>
												<td class="billing-total">4</td>
												<td class="billing-total">$1200</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="pt-20 check_responsive">
								<div class="col-md-6">
									<div class="payment-method pt-60">
										<div class="small-header">
											<h2>Payment Method</h2>
										</div>
										
										<div class="checkbox pt-20">
											<label>
												<input type="checkbox"> Check Payment
											</label>
										</div>
										<div class="checkbox pt-20">
											<label>
												<input type="checkbox" class="custom-checkbox"> Paypal 
												<img class="" src="assets/images/paypal.jpg" alt="">
											</label>
										</div>
										
										<div class="pt-30">
											<input type="submit" class="btn btn-default theme-btn" name="Submit" value="Submit">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div> <!-- end container -->
		</section>
		
	@stop
		
