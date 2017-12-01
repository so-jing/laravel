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
		
		<!-- Page Content Area
        ===================================== -->
		<section id="shop-single-product" class="ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="product-single-content">
							<div class="row">
								<div class="col-md-5 col-sm-5">
									<div class="product-image">
										<img class="img-responsive" src="assets/images/products/product-single-1.jpg" alt="">
									</div>
								</div>
								<div class="col-md-7 col-sm-7">
									<div class="product-content-right">
										<h3>Baby Corn</h3>
										<div class="single-product-review">
											<ul>
												<li>
													<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
												</li>
												<li>
													<p>(9 reviews)</p>
												</li>
											</ul>
										</div>
										
										<h5>$139.89</h5>
										
										<p>
											Duis autem vel eum irure dolor n hendrer it in <br>
											vul uputate velt esse molestie conseq uat. Duis <br>
											suautem vel eupm irure.
										</p>
									</div>
									
									<div class="product-quantity">
										<ul>
											<li>
												<a href="#" class="btn cart-button">ADD TO CART</a>
											</li>
											
											<li>
												<div class="cart-item-quantity">
													<input class="quantity form-group" type="number" value="01">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="product-tags">
								<ul>
									<li>
										SKU: <span>009</span>
									</li>
									<li>
										Category: <span>vegetable</span>
									</li>
									<li>
										Tag: <span>vegetable, green. corn</span>
									</li>
									<li>
										Share: <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>
						
						<!-- Product Row Two -->
						<div class="row pt-50">
							<div class="col-md-12">
								<div class="tab-horizontal">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs product-navtabs">
									  <li class="active"><a href="#eightteen" data-toggle="tab">Description </a></li>
									  <li><a href="#seventeen" data-toggle="tab">Information</a></li>
									  <li><a href="#nineteen" data-toggle="tab">Reviews</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content product-tab-content">
										<div class="tab-pane fade in active" id="eightteen">	
											<P>
												Duis autem vel eum irure dolor n hendrer it in  vul uputate velt esse molestie conseq uat. Duis suautem 
												vel eupm irure dolor in hendrerit in v ulputate velit esse molestie..Duis  aute . Duis autem vel eum iru
												re dolor n hendrer it in  vul uputate velt esse molestie conseq uat. triDuis suautem vel eupm irure dolor 
												in hendreri te velit esstiubst in v ulputate velit esse molestie..Duis  aute.Duis autem vel eum irure dolorn
												hendrer it in  vul uputat.
											</P>
										</div>
										
										<div class="tab-pane fade" id="seventeen">	
											<div class="row">
												<div class="col-md-3 col-sm-6 col-xs-12">
													<div class="product-info">
														<ul>
															<li>
																Color: <span>Yellow</span>
															</li>
															<li>
																Weight: <span>2 kg</span>
															</li>
															<li>
																Origin: <span>Mexico</span>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12">
													<div class="product-info">
														<ul>
															<li>
																Month of Production: <span>March</span>
															</li>
															<li>
																Availability: <span>Available</span>
															</li>
															<li>
																Free shipping: <span>USA</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										
										<div class="tab-pane fade" id="nineteen">
											<div class="">
												
												<div class="comment-holder">
													<ul class="media-list comment-list">
														<li class="media single-authors-content pt-40 pb-30"> 
															<div class="media-left"> 
																<a href="#"> 
																	<img class="media-object" src="assets/images/blog/author-1.jpg" alt=""> 
																</a> 
																<h5 class="media-heading">Jona Doe</h5> 
																<p>Customer</p>
															</div> 
															<div class="media-body"> 
																<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
																<p>
																	Duis autem vel eum irure dolor n hendrer it invul uputate velt esse molestie <br>
																	conseq uat. Duis suautem vel eupm irure dolor in hendrerit.vel eum irure d <br>
																	olor n hendrer it invul uputate velt esse 
																</p>
																<a href="#leave-comment"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
															</div> 
														</li>
														
														<li class="media single-authors-content pt-25 pb-30"> 
															<div class="media-left"> 
																<a href="#"> 
																	<img class="media-object" src="assets/images/blog/author-2.jpg" alt=""> 
																</a> 
																<h5 class="media-heading">John Doe</h5> 
																<p>Customer</p>
															</div> 
															<div class="media-body"> 
																<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
																<p>
																	Duis autem vel eum irure dolor n hendrer it invul uputate velt esse molestie <br>
																	conseq uat. Duis suautem vel eupm irure dolor in hendrerit.vel eum irure d <br>
																	olor n hendrer it invul uputate velt esse 
																</p>
																<a href="#leave-comment"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
															</div> 
														</li>
													</ul>
												</div>
												
												<div id="leave-comment" class="page-left-header pt-60">
													<h5>Your review</h5>
													
													<div class="form-group">
														<label class="pt-40">Your Rating :</label>
														<i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="">
																
													<!-- Post Form -->                            
													<form class="form reply-form pt-25">
														<div class="clearfix">
															<div id="contact_message"></div>
															
															
															<div class="col-xs-12">
																<!-- Message -->
																<div class="form-group">
																	<textarea rows="8" class="form-control organix-reply-form" placeholder="Message"></textarea>
																</div>
																
															</div>
															
															<div class="col-xs-6">
																<!-- Name -->
																<div class="form-group">
																	<input type="text" class="form-control organix-reply-form" placeholder="Name*" pattern=".{2,100}" required>
																</div>
															</div>
															<div class="col-xs-6">
																<!-- Email -->
																<div class="form-group">
																	<input type="email" class="form-control organix-reply-form" placeholder="Email*"  required>
																</div>
															</div>
															
															
														</div>
														
														<div class="col-xs-12">
															<!-- Send Button -->
															<button class="btn btn-default">Submit</button>
														</div>
														
														
													</form>
												</div>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Product Row Two -->
						
						<div class="row  pt-70">
							<div class="col-md-12">
								<div class="related-item">
									<h3>Related Products</h3>
								</div>
							</div>
						</div>
						
						<div class="row pt-25">
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product-style-1 text-center">
									<img class="img-responsive" src="assets/images/products/product-1.jpg" alt="">
									
									<div class="product-detail-content">
										<h6>Tamarind Juice </h6>
										<div class="product-rating-with-border">
											<div class="background-border"></div>
											<ul>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
										<h5>$139.89</h5>
										<a class="btn cart-button" href="#"> ADD TO CART </a>
									</div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product-style-1 text-center">
									<img class="img-responsive" src="assets/images/products/product-2.jpg" alt="">
									
									<div class="product-detail-content">
										<h6>Tamarind Juice </h6>
										<div class="product-rating-with-border">
											<div class="background-border"></div>
											<ul>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
										<h5>$139.89</h5>
										<a class="btn cart-button" href="#"> ADD TO CART </a>
									</div>
								</div>
							</div>
							
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product-style-1 text-center">
									<img class="img-responsive" src="assets/images/products/product-3.jpg" alt="">
									
									<div class="product-detail-content">
										<h6>Tamarind Juice </h6>
										<div class="product-rating-with-border">
											<div class="background-border"></div>
											<ul>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
										<h5>$139.89</h5>
										<a class="btn cart-button" href="#"> ADD TO CART </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<aside class="sidebar-right">
						<div class="col-md-3">
							<div class="widget blog-right-search">
								<h2 class="widget-title">Search</h2>
								
								<input type="text" class="form-control search-box" placeholder="Type to search here" >
								<button type="submit" class="submit-search"><i class="fa fa-search"></i></button>
							</div>
							
							
							<div class="widget mt-30">
								<h2 class="widget-title">Category</h2>
								
								<ul>
									<li class="cat-item"><a href="#">Gardening <span class="cat-count">(2)</span></a></li>
									<li class="cat-item"><a href="#">Plantation <span class="cat-count">(3)</span></a></li>
									<li class="cat-item"><a href="#">Travel <span class="cat-count">(2)</span></a></li>
									<li class="cat-item"><a href="#">Lifestyle <span class="cat-count">(4)</span></a></li>
									<li class="cat-item"><a href="#">Education <span class="cat-count">(2)</span></a></li>
									<li class="cat-item"><a href="#">Inspiration <span class="cat-count">(6)</span></a></li>
								</ul>
							</div>
							
							<div class="widget mt-30">
								<h2 class="widget-title">Recent Products</h2>
								
								<div class="sidebar-product-list">
									<ul>
										<li>
											<div class="media">
												<div class="media-left">
													<img src="assets/images/products/small-1.jpg" alt="">
												</div>
												<div class="media-body">
													<a href="#">Eggplant</a>
													<p>$16</p>
												</div>
											</div>
										</li>
										
										<li>
											<div class="media">
												<div class="media-left">
													<img src="assets/images/products/small-2.jpg" alt="">
												</div>
												<div class="media-body">
													<a href="#">Lemon</a>
													<p>$16</p>
												</div>
											</div>
										</li>
										
										<li>
											<div class="media">
												<div class="media-left">
													<img src="assets/images/products/small-3.jpg" alt="">
												</div>
												<div class="media-body">
													<a href="#">Tomato</a>
													<p>$16</p>
												</div>
											</div>
										</li>
										
										<li>
											<div class="media">
												<div class="media-left">
													<img src="assets/images/products/small-4.jpg" alt="">
												</div>
												<div class="media-body">
													<a href="#">Basil</a>
													<p>$16</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="widget widget_tag mt-30">
								<h2 class="widget-title">Tags</h2>
								
								<ul>
									<li class="cat-item"><a href="#">Fresh</a></li>
									<li class="cat-item"><a href="#">Planting</a></li>
									<li class="cat-item"><a href="#">Planting</a></li>
									<li class="cat-item"><a href="#">Organics</a></li>
									<li class="cat-item"><a href="#">Green</a></li>
									<li class="cat-item"><a href="#">Vagetabes</a></li>
									<li class="cat-item"><a href="#">Gardening</a></li>
									<li class="cat-item"><a href="#">Vagetabes</a></li>
								</ul>
							</div>
							
							<div class="widget widget_social mt-30">
								<h2 class="widget-title">Socials</h2>
								
								<ul>
									<li class="cat-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="cat-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="cat-item"><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="cat-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="cat-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							
						</div>
					</aside>
				</div>
				
			</div>
		</section>
		<!-- End Section Image Content  -->
		
@stop
	