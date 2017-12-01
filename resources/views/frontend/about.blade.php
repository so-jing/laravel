@extends('frontend/base')
	
		
	@section('content')
		<section>
			<div class="breadcrumps-back">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="breadcrumps-heading">
								<h1>About us</h1>
								<div class="breadcrumps-border"></div>
								<ul>
									<li> <a href="index.html"> Home</a> /</li>
									<li> <a href="#"> About us</a></li>
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
		<section id="about-content" class="ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="about-content-section">
							<div class="organix-header text-left">
								<h1>Welcome to <br>The Organix</h1>
								<div class="heading-border"></div>
								<p>
									Health care with organic science
								</p>
							</div>
							
							<p>
								Duis autem vel eum irure dolor n hendrer it trex bgre wevul uputate velt esse molestie conseq uat. <br>
								uputate velt esse molestie conseq uat. Duis suautem eupm irure dolor in hendrerit Duis autem ve <br>
								er it in trex bgre wevul uputate velt. esse molestie conseq Duis  hendrer treiit invul uputate velt es <br>
								Duis suautem vel eupm irure dolor in hendrerit.<br>
							</p>
							<p>	
								Duis autem vel eum irure dolor n hendrer it trex bgre wevul uputate velt esse molestie conseq uat. <br>
								uputate velt esse molestie conseq uat. Duis suautem vel eupm irure dolor in hen.
							</p>
							
							<a class="btn btn-default" href="#"> read more </a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="about-side-info">
							<ul>
								<li>
									<div class="meadia">
										<div class="media-left">
											<img class="" src="assets/images/custom-icon-1.png" alt="">
										</div>
										<div class="media-body">
											<h2>5K <span>customers</span></h2>
											<p>Duis autem vel eum irure dol</p>
										</div>
									</div>
								</li>
								
								<li>
									<div class="meadia">
										<div class="media-left">
											<img class="" src="assets/images/custom-icon-2.png" alt="">
										</div>
										<div class="media-body">
											<h2>1K <span>shoppers</span></h2>
											<p>Duis autem vel eum irure dol</p>
										</div>
									</div>
								</li>
								
								<li>
									<div class="meadia">
										<div class="media-left">
											<img class="" src="assets/images/custom-icon-3.png" alt="">
										</div>
										<div class="media-body">
											<h2>1K <span>farmers</span></h2>
											<p>Duis autem vel eum irure dol</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Image Content  -->
		
		<!-- Video Wrap -->
			<section id="video-section">
				<div class="video-overlay">
					<div class="media-btns buttons">
						<div class="play-btn button" id="play-button">
						</div>
						<div class="pause-btn button" id="pause-button">
						</div>
					</div>
				</div>
				<!--<div class="video-container">
					<iframe width="auto" height="auto" src="/www.youtube.com/embed/tDvBwPzJ7dY?autoplay=1&loop=1&controls=0&start=31&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
					</div>
				 1. The <div> tag will contain the <iframe> (and video player) -->
				<div class="video-container">
					<div id="player"></div>
				</div>
			</section>
		<!-- Video Wrap -->
		
		<!-- Fun Facts Area
        ===================================== -->
		<section id="fun-facts" class="ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="media organix-fun-content"> 
							<div class="media-left"> 
								<i class="fa fa-camera" aria-hidden="true"></i>
							</div> 
							
							<div class="media-body"> 
								<h4 class="media-heading fun-number">139</h4> 
								
								<h5 class="fun-heading">Photo Uploaded</h5>
							</div> 
						</div>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="media organix-fun-content"> 
							<div class="media-left"> 
								<i class="fa fa-camera" aria-hidden="true"></i>
							</div> 
							
							<div class="media-body"> 
								<h4 class="media-heading fun-number">239</h4> 
								
								<h5 class="fun-heading">Data Analyzed</h5>
							</div> 
						</div>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="media organix-fun-content"> 
							<div class="media-left"> 
								<i class="fa fa-laptop" aria-hidden="true"></i>
							</div> 
							
							<div class="media-body"> 
								<h4 class="media-heading fun-number">339</h4> 
								
								<h5 class="fun-heading">E-mail coverage</h5>
							</div> 
						</div>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="media organix-fun-content"> 
							<div class="media-left"> 
								<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							</div> 
							
							<div class="media-body"> 
								<h4 class="media-heading fun-number">439</h4> 
								
								<h5 class="fun-heading">People Liked</h5>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Image Content  -->
		
		<!-- Fun Facts Area
        ===================================== -->
		<section id="skills-area" class="skills-back ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="progress-Section">
							
							<div class="progress-content">
								<h5>Skill one</h5>
								<div class="progress progress-one">
									<div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" >
										<span class="progress-percent"> 77%</span>
									</div>
								</div>
							</div>
							
							<div class="progress-content">
								<h5>Skill two</h5>
								<div class="progress progress-two">
									<div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" >
										<span class="progress-percent"> 93%</span>
									</div>
								</div>
							</div>
							
							<div class="progress-content">
								<h5>Skill three</h5>
								<div class="progress progress-three">
									<div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" >
										<span class="progress-percent"> 77%</span>
									</div>
								</div>
							</div>
							
							<div class="progress-content">
								<h5>Skill four</h5>
								<div class="progress progress-four">
									<div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" >
										<span class="progress-percent"> 88%</span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1 pl-gero">
						<div class="skills-content">
							<div class="organix-header white text-left">
								<h1>Our skills help <br>to serve you</h1>
								<div class="heading-border"></div>
								<p>
									Health care with organic science
								</p>
							</div>
							<p class="white">
								Duis autem vel eum irure dolor n hendrer it in vul uputate velt e
								sse molestie conseq uat. Duis  suautem vel eupm irure dolor in h
								endrerit in vulputate velit esse molestie.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Image Content  -->
		
		<!-- Fun Facts Area
        ===================================== -->
		<section id="service-area" class="ptb-130">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="media organix-service-content"> 
							<div class="media-left"> 
								<img class="" src="assets/images/icon-5.png" alt="">
							</div> 
							
							<div class="media-body"> 
								<a href="#" class="media-heading">Service One</a> 
								
								<p>
									Duis autem vel eum irure dolor n i <br>
									vul uputate velt esse molestie 
								</p>
							</div> 
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="media organix-service-content"> 
							<div class="media-left"> 
								<img class="" src="assets/images/icon-5.png" alt="">
							</div> 
							
							<div class="media-body"> 
								<a href="#" class="media-heading">Service Two</a> 
								
								<p>
									Duis autem vel eum irure dolor n i <br>
									vul uputate velt esse molestie 
								</p>
							</div> 
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="media organix-service-content"> 
							<div class="media-left"> 
								<img class="" src="assets/images/icon-5.png" alt="">
							</div> 
							
							<div class="media-body"> 
								<a href="#" class="media-heading">Service Three</a> 
								
								<p>
									Duis autem vel eum irure dolor n i <br>
									vul uputate velt esse molestie 
								</p>
							</div> 
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6 pt-60">
						<div class="media organix-service-content"> 
							<div class="media-left"> 
								<img class="" src="assets/images/icon-5.png" alt="">
							</div> 
							
							<div class="media-body"> 
								<a href="#" class="media-heading">Service Four</a> 
								
								<p>
									Duis autem vel eum irure dolor n i <br>
									vul uputate velt esse molestie 
								</p>
							</div> 
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6 pt-60">
						<div class="media organix-service-content"> 
							<div class="media-left"> 
								<img class="" src="assets/images/icon-5.png" alt="">
							</div> 
							
							<div class="media-body"> 
								<a href="#" class="media-heading">Service Five</a> 
								
								<p>
									Duis autem vel eum irure dolor n i <br>
									vul uputate velt esse molestie 
								</p>
							</div> 
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6 pt-60">
						<div class="media organix-service-content"> 
							<div class="media-left"> 
								<img class="" src="assets/images/icon-5.png" alt="">
							</div> 
							
							<div class="media-body"> 
								<a href="#" class="media-heading">Service Six</a> 
								
								<p>
									Duis autem vel eum irure dolor n i <br>
									vul uputate velt esse molestie 
								</p>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Image Content  -->
		
		<!-- Team Members Area
        ===================================== -->
		<section id="team-members" class="pb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="organix-header text-center">
							<h1>Our Team</h1>
							<div class="heading-border"></div>
							<p>
								Health care with organic science Duis autem vel eum irure dolor <br>
								vul uputate velt esse molestie conseq uat. 
							</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-1.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-2.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-3.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-4.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6 mt-30">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-5.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6 mt-30">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-6.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6 mt-30">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-7.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-4 col-xs-6 mt-30">
						<div class="team-member">
							<figure>
								<img class="img-responsive" src="assets/images/team/team-8.jpg" alt="">
								<figcaption>
									<h2>
										Samuel <br>
										Hooper
									</h2>
									
									<div class="team-border"></div>
									
									<p>Organic Expert</p>
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Image Content  -->
		
		<section id="purchase-banner" class="prcahse-banner-back">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="purchase-banner-content">
							<h1>Want to purchase our product?</h1>
							
							<a class="btn btn-default" href="#"> GET IN TOUCH </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Footer Area
        ===================================== -->
		
	@stop		
			
			<script>
			  	var tag = document.createElement('script');
			  	tag.src = "http://www.youtube.com/player_api";
			  	var firstScriptTag = document.getElementsByTagName('script')[0];
			  	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			  	var player;
			  	function onYouTubePlayerAPIReady() {
					player = new YT.Player('player', {
					  height: '100%',
					  width: '100%',			
					  playerVars: { 'rel':0 , 'autoplay': 1, 'loop':1, 'controls':0, 'start':30, 'autohide':1,'wmode':'opaque' },
					  videoId: 'tDvBwPzJ7dY',
					  events: {
						'onReady': onPlayerReady,
						'onStateChange': onPlayerStateChange}
					});
			  	}
			  	function onPlayerReady(event) {
					event.target.mute();
			  		//event.target.setSize(width:100, height:750);

			  		// bind events
				  	var playButton = document.getElementById("play-button");
				  	playButton.addEventListener("click", function() {
						player.playVideo();
						jQuery(this).hide();
						jQuery('#pause-button').show();
				  	});
		  
				  	var pauseButton = document.getElementById("pause-button");
				  	pauseButton.addEventListener("click", function() {
						player.pauseVideo();
						jQuery(this).hide();
						jQuery('#play-button').show();
				  	});

			  	}
				function onPlayerStateChange(event) {        
					if(event.data === 0) {          
						event.target.playVideo();
					}
				}
			</script>
	</body>
</html>

